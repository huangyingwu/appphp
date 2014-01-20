<?
/**
* @copyright huangyingwu (c)2009
* @author huangyingwu <huangyingwu@gmail.com>
* @version 1.0
*/	 

define( 'APPPHP_ROOTPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define( 'APPPHP_CLASSPATH', "services". DIRECTORY_SEPARATOR);

require_once APPPHP_ROOTPATH . 'config/Config.php';
require_once APPPHP_ROOTPATH . 'config/Database.php';

require_once APPPHP_ROOTPATH . 'core/database/DB.php';

require_once APPPHP_ROOTPATH . 'core/Services.php';
require_once APPPHP_ROOTPATH . 'core/Model.php';
require_once APPPHP_ROOTPATH . 'core/Common.php';
require_once APPPHP_ROOTPATH . 'core/Exception.php';
require_once APPPHP_ROOTPATH . 'core/Loader.php';
require_once APPPHP_ROOTPATH . 'core/Router.php';
require_once APPPHP_ROOTPATH . 'core/Security.php';
require_once APPPHP_ROOTPATH . 'core/AppphpServices.php';
require_once APPPHP_ROOTPATH . 'core/HttpRequestFactory.php';
require_once APPPHP_ROOTPATH . 'core/Autoload.php';





?>