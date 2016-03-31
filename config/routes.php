<?
$app->add("IndexController:before");
$app->get("/", "IndexController:home");
$app->post("/", "IndexController:push");
$app->add("IndexController:after");
?>
