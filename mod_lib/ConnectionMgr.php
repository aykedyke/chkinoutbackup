<?php
if (!isset($gReferralID))
{
	$gReferralID='';
}

if (!defined("DB_SERVER")) define("DB_SERVER", "localhost");
if (!defined("DB_NAME")) define("DB_NAME", "db_attendance");
if (!defined("DB_USER")) define ("DB_USER", "mike");
if (!defined("DB_PASSWORD")) define ("DB_PASSWORD", "bg4li3wej3h4kjwq");

$promotion = false;

class ConnectionMgr
{
	var $con;
	var $cur;
	var $tCount;
	var $arrQry;
	var $errNo;
	var $dbName;
//==========================================================
	function ConnectionMgr()
	{
		unset($this->con);
		unset($this->dbName);
		$this->dbName=DB_NAME;
	}
//=====================Creating connection ==================	
	function createConnection()
	{
		$this->con = @mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
		if(!$this->con) 
			return -1;
		
		if(!mysql_select_db($this->dbName)) 
			return -2;
		return $this->con;
	}
//===========Executing the select query==================	
	
	function DML_executeQry($query)
	{
		if(!isset($this->con))
			$this->errNo=$this->createConnection();
		
		if($this->errNo > 0)
		{
			//$eQuery=mysql_real_escape_string($query,$this->errNo);
			$result = mysql_query($query,$this->errNo);
			if (!$result) 
			{
				//print "<br>".$query."<br>";
				echo mysql_error();
				return -3;
			}		
			return $result;
		}
		else
		{
			return $this->errNo;
		}
	}
//===========================Executing the insert update delete query===============	
	
	function DDL_executeQry($query)
	{		
		if(!isset($this->con))			
			$this->errNo=$this->createConnection();			
		if($this->errNo)
		{
			//$eQuery=mysql_real_escape_string($query,$this->errNo);
			if (!mysql_query($query,$this->errNo)) 
			{
				//echo $query."<br>";
				//echo mysql_error();
				$mysqlErrNo=mysql_errno($this->con);
				//echo $mysqlErrNo;
				if($mysqlErrNo==1451 || $mysqlErrNo==1062)
					return "-".mysql_errno($this->con);
				else
					return -3;
			}			
			return 1;
		}
		else
		{
			return $this->errNo;
		}
	}
	
	
//==Start tanscation function =======================	
	function startinTranscation()
	{
		$errNo=$this->DDL_executeQry("start transaction");
		if($errNo>1)
			return 1;
		else
			return $errNo;
	}
	//=======Commit transcaton================================
	function commitTranscation()
	{
		$errNo=$this->DDL_executeQry("commit");
		if($errNo>1)
			return 1;
		else
			return $errNo;
	}
	//==========Roll back transcation ==========
	function rollbackTranscation()
	{
		$errNo=$this->DDL_executeQry("rollback");
		if($errNo>1)
			return 1;
		else
			return $errNo;
	}//===================================
	function setSecurity($fields,$table,$where,$sessionName)
	{
		$query = "Select $fields from $table where $where";
		//echo $query;		
		$errNoRecom=$this->DML_executeQry($query);								
		$errNo = mysql_fetch_object($errNoRecom);
		if($errNo > 0)
		{
			session_start();
			$_SESSION['username']=$sessionName;
			return $errNo;
		}
		else
			return $errNo;
		
	}	

	function errorHandeler($errNo)
	{
		$msgQuery = $this->DML_executeQry("SELECT fErrorDetail FROM tbl_mysql_code WHERE fErrorNumber = '$errNo'");
		$rec = mysql_fetch_object($msgQuery);
		$msg = $rec->fErrorDetail;
		return $msg;
	}

//=================================================================================
	function db_query($query)
	{
		if(!isset($this->con))
			$this->errNo=$this->createConnection();
		
		if($this->errNo > 0)
		{
			$result = mysql_query($query,$this->errNo);
			if (!$result) 
			{
				echo mysql_error();
				return -3;
			}		
			return $result;
		}
		else
		{
			return $this->errNo;
		}
	}
	
	function SQLResultToArray($RESOURCE){
    if(!empty($RESOURCE) && $RESOURCE != NULL){
      $ARRAY = array();
      while($v = mysql_fetch_assoc($RESOURCE)){
        $ARRAY[] = $v;
      }
      return $ARRAY;
    }
    else
      return false;
  }
  
  function string_split($STRING, $SPLIT = 1){
		$ARRAY = array();
	 
		for ($i = 0; $i < strlen($STRING); $i += $SPLIT){
			$ARRAY[] = substr($STRING, $i, $SPLIT);
		}
	 
		return $ARRAY;
	}
  
  function randName(){
    $SESSION = session_id();
    $SESSION_ARRAY = $this->string_split($SESSION);
    $ARRAY_KEYS = array_rand($SESSION_ARRAY, 8);
    
    foreach($ARRAY_KEYS as $v){
      $RAND_SESSION .= $SESSION_ARRAY[$v];
    }
    
    $TIME_STAMP = time();
    $TIME_ARRAY = $this->string_split($TIME_STAMP);
    $ARRAY_KEYS = array_rand($TIME_ARRAY, 8);
    
    foreach($ARRAY_KEYS as $v){
      $RAND_TIME .= $TIME_ARRAY[$v];
    }
    
    $RAND_COMBINE = $this->string_split($RAND_SESSION.$RAND_TIME);
    $ARRAY_KEYS = array_rand($RAND_COMBINE, 16);
    
    foreach($ARRAY_KEYS as $v){
      $HASH .= $RAND_COMBINE[$v];
    }
    
    return $HASH;
  }

  function getExtensionName($STRING){
    $ARRAY = $this->string_split(substr($STRING, -4));
  
    if($ARRAY[0] == ".") $EXTENSION = substr($STRING, -4);
    else $EXTENSION = substr($STRING, -5);
    
    $EXTENSION = str_replace(".", "", trim($EXTENSION));
    return $EXTENSION;
  }
  
  function strip_html_tags($text)
	{
	 $text = preg_replace(
			 array(
				 // Remove invisible content
					 '@<head[^>]*?>.*?</head>@siu',
					 '@<style[^>]*?>.*?</style>@siu',
					 '@<script[^>]*?.*?</script>@siu',
					 '@<object[^>]*?.*?</object>@siu',
					 '@<embed[^>]*?.*?</embed>@siu',
					 '@<applet[^>]*?.*?</applet>@siu',
					 '@<noframes[^>]*?.*?</noframes>@siu',
					 '@<noscript[^>]*?.*?</noscript>@siu',
					 '@<noembed[^>]*?.*?</noembed>@siu',
				 // Add line breaks before and after blocks
					 '@</?((address)|(blockquote)|(center)|(del))@iu',
					 '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
					 '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
					 '@</?((table)|(th)|(td)|(caption))@iu',
					 '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
					 '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
					 '@</?((frameset)|(frame)|(iframe))@iu',
			 ),
			 array(
					 ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
					 "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
					 "\n\$0", "\n\$0",
			 ),
			 $text );
	 return strip_tags( $text );
	}
}
?>