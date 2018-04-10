<?php

/**
 * Interface
 * parser json ,xml,php to php array
 * dependency injection 
 * strategy pattern
 *
 * SOLID
 * O open close principal
 * 
 * 
 */
require __DIR__.'/../vendor/autoload.php';

use App\Contracts\Config\ArrayConfig;
use App\Contracts\Config\JsonConfig;
use App\Contracts\Config\XMLConfig;
use App\Classes\Config;

$config = new Config(
		new JsonConfig
		);

 $config->load(__DIR__.'/../app/config/config.json');


 $config->setConfig(
	new XMLConfig
 	);

  $config->load(__DIR__.'/../app/config/config.xml');






echo $config->get('molecule.0.symbol')  ;




