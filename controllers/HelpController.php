<?php
	class HelpController extends Controller {
		function __construct() {
			echo 'We are in help controller';

			$this->view->render('HelpView/HelpView.php');
		}

		function other($arg = false) {
			parent::__construct();
			echo 'Optional argument ' . $arg;
		}
	}
?>