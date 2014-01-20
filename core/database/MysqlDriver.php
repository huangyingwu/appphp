<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/
class MysqlDriver{
	
	function db_connent(){
	
	}

	function db_pconnent(){
	
	}
	
	function db_select(){
	
	}
	
	function db_set_charset(){
	
	}
	
	function db_version(){
	
	}
	
	function sql(){
	
	}
	
	function trans_begin(){
	
	}
	
	function trans_commit(){
	
	}
	
	function trans_rollback(){
	
	}
	
	function affected_rows(){
	
	}
	
	function insert_id(){
	
	}
	
	function count_all(){
	
	}
	
	function insert($table,$keys,$values){
		return "INSERT INTO ".$table." (".implode(", ",$keys).") VALUES (".implode(", ",$values).") ";
	}
	
	function update(){
	
	}
	
	function truncate($table){
		return "TRUNCATE ".$table;
	}
	
	function close($conn_id){
		@mysql_close($conn_id);
	}
}
?>