<?
abstract class ApplicationController {

  protected $container;

  public function __construct(){
    global $app;
    $this->container = $app->getContainer();
  }
}
?>
