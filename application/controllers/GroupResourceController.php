<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('REST_Controller.php');

class GroupResourceController extends REST_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	//this method to get the details about the product categories including groups.
	public function index_get($groupId) {
		$this->load->model('GroupModel');
		echo json_encode($this->GroupModel->getGroupProducts($groupId));
	}
}