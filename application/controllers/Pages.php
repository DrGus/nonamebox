<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index()
	{
		echo "index page";
	}
	
	public function view($page = "home")
	{
    echo $page;
	}
}
