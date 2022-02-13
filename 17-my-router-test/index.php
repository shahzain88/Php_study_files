<?php 

require_once "vendor/autoload.php";
use app\Product;

$router  = new Router();

					// 'uri path',[controller to use , viwe to run]	
$router->get("/",[app\controller\ProductCon::class,"index"]);
$router->get("/product",[app\controller\ProductCon::class,"index"]);
$router->get("/product/index",[app\controller\ProductCon::class,"index"]);
$router->get("/product/create",[app\controller\ProductCon::class,"create"])

?>