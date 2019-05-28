<?php 

namespace App\Core;

class Application
{
	public function run()
	{
		$router = new Router;
		$router->process();
	}
}