<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/
class Router{
	var $Directory="";
	var $Class="";
	var $Method="";
	var $Parameter=array();
	
	
	public function  __construct(){
		
	}
	
	function setRequest($url){
		$directoryStatus=true;
		$classStatus=true;
		$methodStatus=true;
		$parameterStatus=true;
		$tempDir=array();
		$tempParameter=array();
		$urlArray=explode("/",$url);
		foreach($urlArray as $key=>$val){
			if($directoryStatus){
				if(is_dir($val)){
					$tempDir[]=$val;
				}else{
					$this->setDirectory(implode('/',$tempDir));
					$directoryStatus=false;
				}
			}
			if(!$directoryStatus && $classStatus){
				$callClass =& load_class($val, APPPHP_CLASSPATH);
				if(class_exists($val)){
					$this->setClass($val);
					$classStatus=false;
				}
				continue;
			}
			if(!$classStatus && $methodStatus){
				$this->setMethod($val);
				$methodStatus=false;
				continue;
			}
			if(!$methodStatus){
				$tempParameter[]=$val;
			}
		}
		$this->setParameter($tempParameter);
	}
	
	function validateRequest(){
	
	
	}
	
	function setDirectory($directory){
		$this->Directory=$directory;
	}
	
	function setClass($class){
		$this->Class=$class;
	}
	
	function setMethod($method){
		$this->Method=$method;
	}
	
	function setParameter($parameter){
		$this->Parameter=$parameter;
	}
}
?>