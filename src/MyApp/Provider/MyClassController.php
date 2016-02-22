<?php
namespace MyApp\Provider;
 
use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\ControllerProviderInterface;
 
class MyClassController implements ControllerProviderInterface 
{
 
	public function connect(Application $app) 
	{
	$factory=$app['controllers_factory'];
	// Routes are defined here
	$factory->get('/','MyApp\Controller\IndexController::indexAction');
	$factory->get('/home','MyApp\Provider\MyClassController::home');
	
	return $factory;
	}

	public function home() 
	{
	return 'Hello world';
	}
 
}