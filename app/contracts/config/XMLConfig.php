<?php

namespace App\Contracts\Config;

use App\Contracts\ConfigInterface;



class XMLConfig implements ConfigInterface{
	public function parser($path){

	
		return json_decode(
			json_encode(
				simplexml_load_string(
					file_get_contents($path)
					)
			), true);

	}
}