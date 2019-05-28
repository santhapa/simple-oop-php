<?php 

namespace App\Core;

class Config
{
	public function __construct()
  	{
    	$this->bootstrapSelf();
  	}
  
  	private function bootstrapSelf()
  	{
  		require_once(APPPATH.'../config/config.php');

    	foreach($config as $key => $value)
    	{
      		$this->{$key} = $value;
    	}
  	}
}