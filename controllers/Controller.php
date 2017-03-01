<?php
	class Controller {
		function __construct() {
			echo 'Master controller';
			$this->view = new View();
		}
	}

?>