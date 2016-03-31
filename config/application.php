<?
use Slim\Views\PhpRenderer;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require 'vendor/autoload.php';
// DotENV
$dotenv = new Dotenv\Dotenv(__DIR__."/../");
$dotenv->load();

//Slim
$app = new Slim\App();

//views path
$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("app/views");

//db config
$paths = array(__DIR__."/db");
$isDevMode = false;

$dbParams = array(
  'driver'   => 'pdo_mysql',
  'host'     => $_ENV["MYSQL_HOST"],
  'user'     => $_ENV["MYSQL_USER"],
  'password' => $_ENV["MYSQL_PASSWORD"],
  'dbname'   => $_ENV["MYSQL_DATABASE"]
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($dbParams, $config);
$container["em"] = $em;

//router
require_once __DIR__."/routes.php";
?>
