<?php
	class Controller {
		function __construct() {
			echo 'Master controller<br />';
			$this->view = new View();
		}
	}

?>