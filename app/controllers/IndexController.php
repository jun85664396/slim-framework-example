<?
class IndexController extends ApplicationController{
  function home($req, $res){
    $example = $this->container
      ->em
      ->getRepository("Example")
      ->findAll();
    return $this->container->renderer->render($res, "/index.html", array("data" => $example));
  }

  function push($req, $res){
    $example = new \Example;
    $example
      ->setTitle($req->getParam("title"))
      ->setContent($req->getParam("content"));
    $this->container->em->persist($example);
    $this->container->em->flush();
    return $res->withRedirect("/");
  }

  function before($req, $res, $next){
    $res = $next($req, $res);
    return $res;
  }

  function after($req, $res, $next){
    $res = $next($req, $res);
    return $res;
  }
}
?>
