<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('REST_Controller.php');
class HomeController extends REST_Controller {
	
	public function index_get()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home_page');
		$this->load->view('templates/footer');
	}
}