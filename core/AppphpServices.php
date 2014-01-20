<?php
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/

class AppphpServices {

    protected $config;
    protected $getData;
    protected $postData;
    protected $contentType;
    protected $view;

	public function  __construct(array $getData, array $postData, $contentType) {
		$this->getData = $getData;
        $this->postData = $postData;
        $this->contentType = $contentType;
	}

	public function service(){
		$ROUTER=&load_class('Router', 'core');
		$ROUTER->setRequest($_SERVER['argv'][0]);
		$this->view=&call_class($ROUTER->Directory,$ROUTER->Class,$ROUTER->Method,$ROUTER->Parameter);
	}

	public function views(){
		
		echo $this->view;
		  
	}
}
?>