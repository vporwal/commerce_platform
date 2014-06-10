<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('REST_Controller.php');

class CategoryResourceController extends REST_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	//this method to get the details about the product categories including groups.
	public function index_get() {
		//$this->CategoryResource->getCategoriesIncludeGroups();
		$this->load->model('CategoryModel');
		echo json_encode($this->CategoryModel->getCategoriesIncludeGroups());
	}
}