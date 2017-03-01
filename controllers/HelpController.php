<?php
	class HelpController extends Controller {
		function __construct() {
			parent::__construct();
			echo 'We are in help controller<br />';

			$this->view->render('HelpView/HelpView.php');
		}

		// Example method with optional parameter
		function other($arg = false) {
			parent::__construct();
			echo 'Optional argument ' . $arg . '<br />';
		}
	}
?>