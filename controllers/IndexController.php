<?php
	class IndexController extends Controller {
		function __construct() {
			parent::__construct();
			echo 'we are in index controller';

			$this->view->render('IndexView/IndexView.php');
		}
	}
?>