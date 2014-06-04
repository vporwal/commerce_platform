<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactUsController extends CI_Controller {
	
	public function index()
	{
	
		$this->load->view('pages/recaptchalib');
		$this->load->view('templates/header');
		$this->load->view('pages/contactus');
		$this->load->view('templates/footer');
	}
}