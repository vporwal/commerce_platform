<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('REST_Controller.php');

class EmailClientController extends REST_Controller {
	
	public function index_post() {
		$this->load->library('email');
		$this->email->from('admin@roofingsolutions.co.in', 'Admin - Roofing Solutions');
		$this->email->to('sales@roofingsolutions.co.in'); 
		$this->email->cc('vinod.porwal@roofingsolutions.co.in'); 
		$this->email->subject("Business Enquiry");
		$this->email->message('this testing to check the email functionality...');
		$this->email->mailType("html");
		$this->email->charset("utf-8");
		$this->email->validate(true);
		$this->email->send();

		//echo $this->email->print_debugger();
	}
	
	public function index_get() {
		$this->load->library('email');
		$this->email->from('admin@roofingsolutions.co.in', 'Admin - Roofing Solutions');
		$this->email->to('sales@roofingsolutions.co.in'); 
		$this->email->cc('vinod.porwal@roofingsolutions.co.in'); 
		$this->email->subject("Business Enquiry");
		$this->email->message('this testing to check the email functionality...');
		
		$config['mailtype'] = 'html';
		$config['charset'] = 'UTF-8';
		$config['wordwrap'] = TRUE;
		$config['validate'] = TRUE;


		$this->email->send();

		//echo $this->email->print_debugger();
	}
}