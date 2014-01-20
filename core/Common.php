<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/

if ( ! function_exists('load_class'))
{
	function &load_class($class, $directory = '', $prefix = '')
	{
		static $_classes = array();

		if (isset($_classes[$class]))
		{
			return $_classes[$class];
		}
		if (file_exists($directory.'/'.$class.'.php'))
		{
				$name = $prefix.$class;

				if (class_exists($name) === FALSE)
				{
					require($directory.'/'.$class.'.php');
				}
				
		}
		$_classes[$class] = new $name();
		return $_classes[$class];
	}
}
if( ! function_exists('call_class')){
	function &call_class($directory,$class,$method,$parameter){
		$callClass=&load_class($class, $directory);
		return call_user_func_array(array($callClass,$method),$parameter);
	}
}
if( ! function_exists('load_model')){
	function load_model($model){
	
	}
}
?>