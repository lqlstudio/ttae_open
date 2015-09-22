<?php



class mysql
{
	var $table;
	var $version = '';
	var $querynum = 0;
	var $slaveid = 0;
	var $db;
	var $config = array();
	var $sqldebug = array();
	var $map = array();
	var $currentSql;
	var $debug = false;

	function __construct($config) {
		$this->config = &$config[db];
		$this->debug = DEBUG;
	}

	function connect() {
		if(empty($this->config)) {
			$this->halt('config_db_not_found');
		}

		$this->db = $this->_dbconnect(
			$this->config['dbhost'],
			$this->config['dbuser'],
			$this->config['dbpw'],
			$this->config['dbcharset'],
			$this->config['dbname'],
			$this->config['pconnect']
			);
		
	
	}

	function _dbconnect($dbhost, $dbuser, $dbpw, $dbcharset, $dbname, $pconnect, $halt = true) {

		if($pconnect) {
			$link = @mysql_pconnect($dbhost, $dbuser, $dbpw, MYSQL_CLIENT_COMPRESS);
		} else {
			$link = @mysql_connect($dbhost, $dbuser, $dbpw, 1, MYSQL_CLIENT_COMPRESS);
		}
		if(!$link) {
			system_error('db',$this->error());
			
			//$halt && $this->halt('notconnect', $this->errno());
		} else {
			$this->db = $link;
			
			$dbname && @mysql_select_db($dbname, $link);
			mysql_query("SET NAMES ".$dbcharset);
		}
		return $link;
	}

	function table_name($tablename) {
		
		return $this->table.$tablename;
	}

	function select_db($dbname) {
		return mysql_select_db($dbname, $this->db);
	}

	function fetch_array($query, $result_type = MYSQL_ASSOC) {
		return mysql_fetch_array($query, $result_type);
	}

	function fetch_first($sql) {
		return $this->fetch_array($this->query($sql));
	}

	function result_first($sql) {
		return $this->result($this->query($sql), 0);
	}
	
	
	public function query($sql, $silent = false, $unbuffered = false) {
		if($this->debug) {
			$starttime = microtime(true);
		}

		if('UNBUFFERED' === $silent) {
			$silent = false;
			$unbuffered = true;
		} elseif('SILENT' === $silent) {
			$silent = true;
			$unbuffered = false;
		}

		$func = $unbuffered ? 'mysql_unbuffered_query' : 'mysql_query';
		if($this->debug) {
			//$this->cursql = array($sql, number_format((microtime(true) - $starttime), 6), debug_backtrace(), $this->db);
			$this->currentSql = $sql;
			$this->sqldebug[] =$sql;
		}
		
		if(!($query = $func($sql, $this->db))) {
			
			if(in_array($this->errno(), array(2006, 2013)) && substr($silent, 0, 5) != 'RETRY') {
				$this->connect();

				return $this->query($sql, 'RETRY'.$silent);
			}
			
			if(!$silent) {
				$this->halt($this->error(), $this->errno(), $sql);
			}
			
		}

		

		$this->querynum++;
		return $query;
	}

	function affected_rows() {
		
		return mysql_affected_rows($this->db);
	}

	function error() {
		return (($this->db) ? mysql_error($this->db) : mysql_error());
	}

	function errno() {
		return intval(($this->db) ? mysql_errno($this->db) : mysql_errno());
	}

	function result($query, $row = 0) {
		$query = @mysql_result($query, $row);
		return $query;
	}

	function num_rows($query) {
		$query = mysql_num_rows($query);
		return $query;
	}

	function num_fields($query) {
		return mysql_num_fields($query);
	}

	function free_result($query) {
		return mysql_free_result($query);
	}

	function insert_id() {
		return ($id = mysql_insert_id($this->db)) >= 0 ? $id : $this->result($this->query("SELECT last_insert_id()"), 0);
	}

	function fetch_row($query) {
		$query = mysql_fetch_row($query);
		return $query;
	}

	function fetch_fields($query) {
		return mysql_fetch_field($query);
	}

	function version() {
		if(empty($this->version)) {
			$this->version = mysql_get_server_info($this->db);
		}
		return $this->version;
	}

	function close() {
		return mysql_close($this->db);
	}

	function halt($message = '', $code = 0, $sql = '') {
		//error::db_error($message, $code, $sql);
		//throw new DbException($message, $code, $sql);
	
		system_error('db',$message);

		
	}
/*-------------------------------------------------------------------------------*/	
/*-------------------------------------------------------------------------------*/	
/*-------------------------------------------------------------------------------*/	
/*-------------------------------------------------------------------------------*/	
/*-------------------------------------------------------------------------------*/	
/*-------------------------------------------------------------------------------*/	
	function errorInfo(){
		return $this->error();
	}
	function sqlOutput($out = true, $all = true){
		if($all){
			$ret =$this->sqldebug;
		}else{
			$ret = $this->sqldebug[count($this->sqldebug)-1];
		}
		if ($out){
			dump($ret);
		}else{
			return $ret;
		}
	}
	
/*	function errorInfo(){
		return $this->error();
	}
	function getAffectedRows(){
		return $this->affected_rows();
	}
	function getOne($sql, $type = MYSQL_ASSOC){
		return $this->fetch_first($sql);

	}
	function getInsertId(){
		return $this->insert_id();
	}
	function update($table,  $data, $condition){
		$sql = DB::implode($data);
		if(empty($sql)) {
			return false;
		}
		$cmd = "UPDATE " . ($low_priority ? 'LOW_PRIORITY' : '');
		$table = $this->table.$table;
		$where = '';
		if (empty($condition)) {
			$where = '1';
		} elseif (is_array($condition)) {
			$where = DB::implode($condition, ' AND ');
		} else {
			$where = $condition;
		}
		$res = $this->query("$cmd $table SET $sql WHERE $where", $unbuffered ? 'UNBUFFERED' : '');
		return $res;
	}
	
	function getAll($sql,$keyfield){
		$data = array();
		$query = DB::query($sql, false, false, false);
		while ($row = $this->fetch_array($query)) {
			if ($keyfield && isset($row[$keyfield])) {
				$data[$row[$keyfield]] = $row;
			} else {
				$data[] = $row;
			}
		}
		$this->free_result($query);
		return $data;
	}

	function getValue($sql=''){
		return  $this->result_first($sql);
		
	}
	
	
	public function insert($table,$data,$return_id,$replace=false){
		$sql =DB::implode($data);

		$cmd = $replace ? 'REPLACE INTO' : 'INSERT INTO';
		$rs = $this->query("$cmd $table SET $sql");
		return $this->insert_id();
		
		
	}
	*/
	
	
}

?>