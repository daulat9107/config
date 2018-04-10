<?php

namespace App\Classes;

use App\Contracts\ConfigInterface;


class Config {
	public $config;
	
	public $array;
	public function __construct(ConfigInterface $config){
			$this->config=$config;
	}
	public function load($path){
		$this->array=$this->config->parser($path);
	}
	public function setConfig(ConfigInterface $config){
		$this->config=$config;
	}
	public function get($keys)
	{

		$keys= explode('.', $keys);
		$value='';
		foreach ($keys as $key) {
			
			if(!isset($this->array[$key])){
				return null;
			}
			if(!is_array($this->array[$key])){
				$value=$this->array[$key];
				break;
			}

			$this->array=$this->array[$key];
			
		}

		return $value;
		


		
	}
}