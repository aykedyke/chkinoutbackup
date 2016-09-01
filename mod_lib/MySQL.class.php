<?
###---This version is compatible with PHP 4.x.x and up---###
/*
	NAME:			MySQL Class
	FILENAME:		MySQL.class.php
	DESCRIPTION:	Compiled class of necessary functions for MySQL Database.

	AUTHOR:			Godofredo P. Timajo, Jr.
	LOCATION:		Philippines
	DATE CREATED:	12-14-2007
*/


class MySQL {

	var $DBHOST 		= "localhost";
	var $DBPORT_SOCK 	= "3306";
	var $DBUSER 		= "root";
	var $DBPASS			= "";
	var $DBNAME 		= "carcrazee_db";


	/*
		NAME:			MySQL
		FUNCTION:		Constructor of the MySQL class.
		PARAMETERS:		@HOST		[STRING]	=> Host name of the MySQL Server in which will be connected.
						@USER		[STRING]	=> The username needed to log in into the MySQL Server.
						@PASS		[STRING]	=> The password for the username supplied.
						@NAME		[STRING]	=> The database name in which will be selected.
						@PORT_SOCK	[STRING]	=> Optional. The Port Number/Sockect Name in which the MySQL Server specified.
		RETURN VALUES:	none
	*/
	function MySQL($HOST='', $USER='', $PASS='', $NAME='', $PORT_SOCK='') {
		error_reporting(E_ERROR);
		$this->DBHOST 		= !empty($HOST)?$HOST:$this->DBHOST;
		$this->DBPORT_SOCK	= !empty($PORT_SOCK)?$PORT_SOCK:$this->DBPORT_SOCK;
		$this->DBUSER 		= !empty($USER)?$USER:$this->DBUSER;
		$this->DBPASS 		= !empty($PASS)?$PASS:$this->DBHOST;
		$this->DBNAME 		= !empty($NAME)?$NAME:$this->DBNAME;

		if(!empty($this->DBPORT_SOCK))
			$this->DBHOST .= ':'.$this->DBPORT_SOCK;
	}

	/*
		NAME:			start
		FUNCTION:		Starts connection and database selection.
		PARAMETERS:		none
		RETURN VALUES:	none
	*/
	function start(){
		$this->connect();
		$this->select_db();
	}

	/*
		NAME: 			connect;
		FUNCTION:		Connects to MySQL database using supplied Host, Username, and Password
		PARAMETERS:		none
		RETURN VALUES:	none
	*/
	function connect() {
		$this->DBLINK = mysql_connect($this->DBHOST, $this->DBUSER, $this->DBPASS);
		if($this->is_error())
			die("MySQL Class ERROR :: ".mysql_error());
	}

	/*
		NAME:			disconnect
		FUNCTION:		Closes the connection to the MySQL server.
		PARAMETERS:		none
		RETURN VALUES:	none
	*/
	function disconnect(){
		if(isset($this->DBLINK)){
			mysql_close($this->DBLINK);
			if($this->is_error())
				die('MySQL Class ERROR :: Cannot disconnect to Database.');
		}
	}

	/*
		NAME:			execute
		FUNCTION:		Executes SQL query
		PARAMETERS:		@QUERY 		[STRING] => Any MySQL Query with accordance to the privilages of the account logged in.
		RETURN VALUES:	Resource pointer
	*/
	function execute($QUERY=""){
		if(empty($QUERY))
			die('MySQL Class ERROR :: Query was empty.');
		return mysql_query($QUERY);
	}


	/*
		NAME:			is_error
		FUNCTION:		Checks if an error occurred in the action made.
		PARAMETERS:		none
		RETURN VALUES:	false 		[BOOLEAN]		=> No error occurred
						error 		[STRING]		=> MySQL Error
	*/
	function is_error(){
		$error = mysql_error($this->DBLINK);
		return empty($error)?false:$error;
	}

	/*
		NAME:			select_db
		FUNCTION:		Selects the database supplied.
		PARAMETERS:		@NEW_DBNAME [STRING] => To be selected Database.
		RETURN VALUES:	none
	*/
	function select_db($NEW_DBNAME=''){
		$ToSelectDB = !empty($NEW_DBNAME)?$NEW_DBNAME:$this->DBNAME;
		if($this->db_exists($ToSelectDB)){
			$this->DBNAME = $ToSelectDB;
			mysql_select_db($this->DBNAME, $this->DBLINK);
			if($this->is_error())
				die('MySQL Class ERROR :: Cannot connect to database');
		}
		else
			die('MySQL Class ERROR :: Database does not exist!');
	}

	/*
		NAME:			array_result
		FUNCTION:		Executes the query supplied and returns values in array form
		PARAMETERS:		@QUERY 		[STRING] => Any MySQL Query with accordance to the privilages of the account logged in.
		RETURN VALUES:	Result		[ARRAY]
	*/
	function array_result($QUERY="", $ISASSOC=true){
		$RES = $this->execute($QUERY);
		$ROWS = array();
		while($ROW = mysql_fetch_array($RES, $ISASSOC?MYSQL_ASSOC:MYSQL_NUM)){
			$ROWS[] = $ROW;
		}
		mysql_free_result($RES);
		return $ROWS;
	}

	/*
		NAME:			array_result
		FUNCTION:		Executes the query supplied and returns the first row of the result array
		PARAMETERS:		@QUERY 		[STRING] => Any MySQL Query with accordance to the privilages of the account logged in.
		RETURN VALUES:	Result		[ARRAY]
	*/
	function array_result_single($QUERY="", $ISASSOC=true){
		$RES = $this->execute($QUERY);
		$ROW = mysql_fetch_array($RES, $ISASSOC?MYSQL_ASSOC:MYSQL_NUM);
		mysql_free_result($RES);
		return $ROW;
	}

	/*
		NAME:			insert
		FUNCTION:		Inserts values to the specified table.
		PARAMETERS:		@FIELDS 	[ARRAY] 	=> Collection of fieldname and value pairs. The array key denotes the field name and array value denotes the field value
						@TABLENAME 	[STRING] 	=> Table name which the fields will be inserted into.
						@RETURNID	[BOOLEAN]	=> Set to true if the Insert ID will be returned. Set to false and returns true if successful query else returns mysql error
		RETURN VALUES:	If RETURNID parameter set to true:
							ID			[NUMERIC]	=> Insert ID of the newly inserted values
						Else
							true		[BOOLEAN]	=> Successful query insert.
							error		[STRING]	=> MySQL error occurred.
	*/
	function insert($FIELDS=array(), $TABLENAME='', $RETURNID=true){
		$INSERTS = $this->filter_fields($FIELDS, $TABLENAME);
		if($this->table_exists($TABLENAME)){
			if(count($INSERTS)>0){
				$FIELDNAMES = '';
				$VALUES		= '';
				foreach($INSERTS as $k=>$v){
					$FIELDNAMES .= !empty($FIELDNAMES)?', ':'';
					$FIELDNAMES .= '`'.$k.'`';

					$VALUES 	.= !empty($VALUES)?', ':'';
					$VALUES		.= $v;
				}
				$Q = "INSERT INTO `".$TABLENAME."` (".$FIELDNAMES.") VALUES(".$VALUES.")";
				$this->execute($Q);
				$is_error = $this->is_error();
				if($RETURNID && ($is_error===false))
					return mysql_insert_id();
				else
					return ($is_error===false)?true:$is_error;
			}
			else
				die('MySQL Class ERROR :: [INSERT] There&rsquo;s nothing to insert.');
		}
		else
			die('MySQL Class ERROR :: [INSERT] Table does not exist!');
	}

	/*
		NAME:			update
		FUNCTION:		Updates fields(s) in the specified table.
		PARAMETERS:		@FIELDS 	[ARRAY] 	=> Collection of fieldname and value pairs. The array key denotes the field name and array value denotes the field value.
						@TABLENAME 	[STRING] 	=> Table name which the fields will be updated.
						@CONDITION	[STRING] 	=> Condition for the update query
									[ARRAY]		=> Collection of condition(s). The array key denotes the field name and array value denotes the field value for the condition of the update query.
						@AND_OR		[STRING]	=> Only used if @CONDITION is an array type. Set the type of condition between the conditions supplied.
		RETURN VALUES:	true		[BOOLEAN]	=> Successful query update.
						error		[STRING]	=> MySQL error occurred.
	*/
	function update($FIELDS=array(), $TABLENAME='', $CONDITION='', $AND_OR='AND'){
		$UPDATES = $this->filter_fields($FIELDS, $TABLENAME);
		if($this->table_exists($TABLENAME)){
			if(count($UPDATES)>0){
				$SETS = '';
				foreach ($UPDATES as $k=>$v){
					$SETS .= !empty($SETS)?', ':'';
					$SETS .= '`'.$k.'`='.$v;
				}

				$QCOND = '';
				if(is_array($CONDITION)){
					$arrCONDS = $this->filter_fields($CONDITION, $TABLENAME);
					foreach ($arrCONDS as $k=>$v){
						$QCOND .= !empty($QCOND)?' '.$AND_OR.' ':'';
						$QCOND .= '`'.$k.'`='.$v;
					}
				}
				else
					$QCOND = $CONDITION;

				$Q = 'UPDATE '.$TABLENAME.' SET '.$SETS.(!empty($QCOND)?' WHERE '.$QCOND:'');
				$this->execute($Q);
				$is_error = $this->is_error();

				return ($is_error===false)?true:$is_error;
			}
			else
				die('MySQL Class ERROR :: [UPDATE] There&rsquo;s nothing to update.');
		}
		else
			die('MySQL Class ERROR :: [UPDATE] Table does not exist!');
	}

	/*
		NAME:			delete
		FUNCTION:		Deletes row(s) in the specified table name with the accordance to the supplied condition.
		PARAMETERS:		@TABLENAME	[STRING]	=> Table name which the delete query be executed.
						@CONDITION	[STRING] 	=> Condition for the delete query.
									[ARRAY]		=> Collection of condition(s). The array key denotes the field name and array value denotes the field value for the condition of the delete query.
						@AND_OR		[STRING]	=> Only used if @CONDITION is an array type. Set the type of condition between the conditions supplied. Default value is AND.
		RETURN VALUES:	true		[BOOLEAN]	=> Successful query delete.
						error		[STRING]	=> MySQL error occurred.
	*/
	function delete($TABLENAME='', $CONDITION='', $AND_OR='AND'){
		if($this->table_exists($TABLENAME)){
			$QCOND = '';
			if(is_array($CONDITION)){
				$arrCONDS = $this->filter_fields($CONDITION, $TABLENAME);
				foreach ($arrCONDS as $k=>$v){
					$QCOND .= !empty($QCOND)?' '.$AND_OR.' ':'';
					$QCOND .= '`'.$k.'`='.$v;
				}
			}
			else
				$QCOND = $CONDITION;

			$Q = 'DELETE FROM `'.$TABLENAME.'`'.(!empty($QCOND)?' WHERE '.$QCOND:'');
			$this->execute($Q);
			$is_error = $this->is_error();

			return ($is_error===false)?true:$is_error;
		}
		else
			die('MySQL Class ERROR :: [DELETE] Table does not exist!');
	}

	/*
		NAME:			filter_fields
		FUNCTION:		Matches the fields supplied to the fields in the table supplied.
						Puts quotes the string type and the like fields.
		PARAMETERS:		@FIELDS		[ARRAY] 	=> Collection of fieldname and value pairs. The array key denotes the field name and array value denotes the field value.
						@TABLE		[STRING]	=> Table name which the fields will be matched into.
		RETURN VALUES:	fields		[ARRAY]		=> Filter fields accoding to the fields matched in the specified table.
	*/
	function filter_fields($FIELDS, $TABLE){
		$TBLFIELDS = $this->get_fields($TABLE, false);
		$RETURN_FIELDS = array();
		foreach($TBLFIELDS as $v){
			if(array_key_exists($v['Field'], $FIELDS)){
				if(is_null($FIELDS[$v['Field']]))
					$RETURN_FIELDS[$v['Field']] = 'NULL';
				else{
					$FTYPE = str_replace(strstr($v['Type'], '('), '', $v['Type']);
					switch($FTYPE){
						case 'char':
						case 'time':
						case 'tinyblob':
						case 'tinytext':
						case 'blob':
						case 'text':
						case 'mediumtext':
						case 'mediumblob':
						case 'longblob':
						case 'longtext':
						case 'enum':
						case 'set':
						case 'datetime':
						case 'date':
						case 'varchar':
							$RETURN_FIELDS[$v['Field']] = '"'.addslashes($FIELDS[$v['Field']]).'"';
							break;
						default:
							$RETURN_FIELDS[$v['Field']] = $FIELDS[$v['Field']];
							break;
					}
				}
			}
		}
		return $RETURN_FIELDS;
	}

	/*
		NAME:			get_fields
		FUNCTION:		Retrieves the fields on the specified table.
		PARAMETERS:		@TABLENAME	[STRING]	=> Table name in which fields be retrieved.
						@FIELDNAMESONLY [BOOLEAN] => Set to true, if field names will be retrieved only. Set to false, if all information on the field will be retrieved. Default value is true.
		RETURN VALUES:	fields		[ARRAY]		=> Collection of fields in the specified table with the accordance to the @FIELDNAMESONLY parameter.
	*/
	function get_fields($TABLENAME="", $FIELDNAMESONLY=true){
		$FIELDS = array();
		if(!empty($TABLENAME) && $this->table_exists($TABLENAME)){
			$Q = "SHOW COLUMNS FROM ".$TABLENAME;
			$R = $this->array_result($Q);
			foreach($R as $v)
				$FIELDS[] = $FIELDNAMESONLY?$v['Field']:$v;
		}
		return $FIELDS;
	}

	/*
		NAME:			db_exists
		FUNCTION:		Checks is the supplies database name exists in the MySQL server.
		PARAMETERS:		@DBNAME		[STRING]	=> The Database name to be searched in the MySQL Server.
		RETURN VALUES:	true		[BOOLEAN]	=> The database exists.
						false		[BOOLEAN]	=> The database does not exist.
	*/
	function db_exists($DBNAME=''){
		$arrDBs = array();
		$DBLR = mysql_list_dbs($this->DBLINK);
		while($row = mysql_fetch_object($DBLR)){
			$arrDBs[] = $row->Database;
		}
		return in_array($DBNAME, $arrDBs);
	}

	/*
		NAME:			table_exists
		FUNCTION:		Checks the table name supplied in the current database supplied/set.
		PARAMETERS:		@TBLNAME	[STRING]	=> Table name to be searched.
						@DBNAME		[STRING]	=> Database name where the Table name supplied to be searched into.
		RETURN VALUES:	true		[BOOLEAN]	=> The table exists.
						false		[BOOLEAN]	=> The table does not exist.
	*/
	function table_exists($TBLNAME='', $DBNAME=''){
		$DBNAME = $this->db_exists($DBNAME)?$DBNAME:$this->DBNAME;
		$Q = "SHOW TABLES FROM `".$DBNAME."`";
		$RES = $this->execute($Q);
		$arrTABLES = array();
		while($row=mysql_fetch_row($RES)){
			$arrTABLES[] = $row[0];
		}
		return in_array($TBLNAME, $arrTABLES);
	}

}
?>