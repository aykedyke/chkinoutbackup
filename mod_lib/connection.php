<?php
	#PHP/MySQL connection configuration
	
	
	#live server settings;
	define('DB_HOST', 'localhost');
	define('DB_USER', 'mike');
	define('DB_PASS', 'bg4li3wej3h4kjwq');
	define('DB_NAME', 'db_attendance'); //database
	
	$DB_CONNECT = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Cannot establish connection to the database: ". mysql_error());
	$LINK = mysql_select_db(DB_NAME, $DB_CONNECT) or die("Can't use ".DB_NAME.": ".mysql_error());

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
    $SESSION_ARRAY = string_split($SESSION);
    $ARRAY_KEYS = array_rand($SESSION_ARRAY, 8);
    
    foreach($ARRAY_KEYS as $v){
      $RAND_SESSION .= $SESSION_ARRAY[$v];
    }
    
    $TIME_STAMP = time();
    $TIME_ARRAY = string_split($TIME_STAMP);
    $ARRAY_KEYS = array_rand($TIME_ARRAY, 8);
    
    foreach($ARRAY_KEYS as $v){
      $RAND_TIME .= $TIME_ARRAY[$v];
    }
    
    $RAND_COMBINE = string_split($RAND_SESSION.$RAND_TIME);
    $ARRAY_KEYS = array_rand($RAND_COMBINE, 16);
    
    foreach($ARRAY_KEYS as $v){
      $HASH .= $RAND_COMBINE[$v];
    }
    
    return $HASH;
  }

  function getExtensionName($STRING){
    $ARRAY = string_split(substr($STRING, -4));
  
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

?>
