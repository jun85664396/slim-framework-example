<?
session_start();
require_once "config/application.php";
if($_SERVER["_"] == "vendor/bin/doctrine"){
}else{
  $app->run();
}
?>
