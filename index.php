<?php 

require_once("vendor/autoload.php");

// Namespaces (para dizer a origem das Classes)
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

// O slim serve para criar uma nova aplicac ao usando o Slim
$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	// Cria a nova pagina
	$page = new Page(); 

	// Define a pagina principal
	$page->setTpl("index");

});

$app->get('/admin', function() {

	// Cria a nova pagina
	$page = new PageAdmin(); 

	// Define a pagina principal
	$page->setTpl("index");

});

// Roda a aplicacao
$app->run();

 ?>