<?php 

namespace App\Core;

abstract class Controller extends Common
{
	protected function render($filePath, $data = [])
	{
		extract($data);
		require(APPPATH."views/" . $filePath . ".php");
	}

}