<?php

namespace App\Contracts\Config;

use App\Contracts\ConfigInterface;



class ArrayConfig implements ConfigInterface{


	public function parser($path){
		return require $path;
	}

}