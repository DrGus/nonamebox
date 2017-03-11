<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends NNB_Controller {
	function __construct() {
		parent::__construct();
	}
	public function view($page = "home")
	{
		
		if ($page = "home") {
			$this->load->view("pages/home");
		}
	}
}
