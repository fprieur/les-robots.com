<?php
class DATABASE_CONFIG {

	//initalize variable as null
		var $default =
		array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'port' => 3306,
			'login' => 'root',
			'password' => 'Gaineyjs46sSB6Q',
			'database' => 'gestionkzom',
				
		);
			
			
 
		//set up connection details to use in Live production server
		var $prod = 
			array(
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => 'localhost',
				'port' => 3306,
				'login' => 'root',
				'password' => 'Gaineyjs46sSB6Q',
				'database' => 'gestionkzom',
				
			);
 
		// and details to use on your local machine for testing and development
		var $dev = 
			array(
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => '127.0.0.1',
				'port' => 3306,
				'login' => 'root',
				'password' => 'root',
				'database' => 'gestionkzom',
			);
		
			// function __construct () {
			// 				if(isset($_SERVER['SERVER_NAME'])){
			// 					if ($_SERVER['SERVER_NAME'] == 'localhost') {
			// 						$this->default = $this->dev;
			// 					} else {
			// 						$this->default = $this->prod;
			// 					}
			// 				}	
			// 			}
}
