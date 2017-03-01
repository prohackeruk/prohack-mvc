<?php
	class Bootstrap {
		function __construct() {
			// Get, trim and explode the url into an array
			$url = isset($_GET['url']) ? $_GET['url'] : null;
			$url = explode('/', rtrim($url, '/'));

			if (empty($url[0])) {
				require 'controllers/IndexController.php';
				$controller = new IndexController();
				return false;
			}

			$file = 'controllers/' . $url[0] . '.php';
			if (file_exists($file)) {
				require $file;
			} else {
				throw new Exception('ControllerNotDefinedException: The specified controller ' . $file . ' is not defined');
			}
			$controller = new $url[0];

			if (isset($url[2])) {
				$controller->{$url[1]}($url[2]); // Pass in a parameter if required
			} else {
				if (isset($url[1])) {
					$controller->{$url[1]}(); // Call the function named 'argument 2' in url, i.e. /controllerName/functionName/
				}	
			}
		}
	}