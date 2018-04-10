<?php

namespace App\Contracts\Config;

use App\Contracts\ConfigInterface;



class JsonConfig implements ConfigInterface{
	public function parser($path){

		return json_decode(file_get_contents($path),true);

	}
}