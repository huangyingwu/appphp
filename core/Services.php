<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/
class Services{

	public function __construct()
	{
		self::$instance =& $this;
	}
	function callMethod($method_name,$parameter){
	//echo $method_name;echo "<br/>";
	//print_r($parameter);
		return call_user_func_array($method_name,$parameter);
	}
	
	public static function &get_instance()
	{
		return self::$instance;
	}

}
?>