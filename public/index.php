<?php 
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__));
define('APP',ROOT.DS.'app');
define('CONFIG',APP.DS.'config');
define('CONTROLLERS',APP.DS.'controlles');
define('CORE',APP.DS.'core');
define('MODELS',APP.DS.'models');
define('VIEWS',APP.DS.'views');


//config
define('SERVER','localhost');
define('USERNAME','root');
define('DATABASE','test1');
define('PASSWORD','');
define('DATABASE_TYPE','mysql');





require_once('../vendor/autoload.php');
$app= new APP\core\app();




?>