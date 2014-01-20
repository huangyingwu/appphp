<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/
class HttpRequestFactory{
	static protected function getPostFileData(){

		if (isset($GLOBALS['HTTP_RAW_POST_DATA'])) {
			return $GLOBALS['HTTP_RAW_POST_DATA'];
		}else{
			return file_get_contents('php://input');
		}

	}
	static public function createAppphp($config = null){
		$contentType = null;
		if(isset ($_GET['contentType'])){
			$contentType = $_GET['contentType'];
		}else if(isset ($_SERVER['CONTENT_TYPE'])){
			$contentType = $_SERVER['CONTENT_TYPE'];
		}
		$getPostFileData = self::getPostFileData();
		return new AppphpServices($_GET, $_POST, $getData, $contentType);
	}
}
?>