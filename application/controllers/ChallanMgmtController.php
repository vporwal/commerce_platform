<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChallanMgmtController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/productInfo
	 *	- or -  
	 * 		http://example.com/index.php/productInfo/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function view()
	{
		$data['pageTitle'] = "Challan ";
		$data['cssclass']= "active";
		$this->load->view('templates/header', $data);
		$this->load->view('pages/challan');
		$this->load->view('templates/footer');

	}
	
	public function getProductInfos() {
		//$this->product_model->getProducts();
		//echo "calling this step..";
		//echo $this->product_model->getProducts();
		//$this->response($this->product_model->getProducts());
		echo json_encode($this->product_model->getProducts());
	}
	
}

/* End of file productInfoController.php */
/* Location: ./application/controllers/productInfoController.php */