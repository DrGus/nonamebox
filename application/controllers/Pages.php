<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends NNB_Controller {
	function __construct() {
		parent::__construct();
	}
	public function view($page = "home")
	{
		
		$this->load->view("includes/head");
		$this->load->view("includes/header");

		if ($page = "home")
			$this->load->view("pages/home");
		
		$this->load->view("includes/footer");
		$this->load->view("includes/foot");
	}
}
