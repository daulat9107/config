<?php




$path=__DIR__.'/../app/config/config.php';


class Config 
{
	protected $path;
	private $array;
	public function load($path){
		$this->path=$path;
	}

	public function jsonParser(){
		$this->array= json_decode(file_get_contents($this->path),true);
	}
	public function ArrayParser(){
		$this->array= require $this->path;
	}

	public function get(){
		return $this->array;
	}
}
$config=new Config;

$config->load($path);

 echo $config->get()['driver']['mysql']['host'];