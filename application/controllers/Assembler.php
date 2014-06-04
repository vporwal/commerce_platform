<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Assembler extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_category');
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/page_renderer');
		$this->load->view('templates/footer');
	}
	
	public function getAllProductsAndCategories() {
		//$this->product_model->getProducts();
		//echo "calling this step..";
		//echo $this->product_model->getProducts();
		//$this->response($this->product_model->getProducts());
		echo json_encode($this->product_category->getAllProductsAndCategories());
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */