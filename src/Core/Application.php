<?php 

namespace App\Core;

class Application
{
	public function __construct(){
    	session_start();
	}

	public function run()
	{
		$router = new Router;
		$router->process();
	}
}