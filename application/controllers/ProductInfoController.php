	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductInfoController extends CI_Controller {

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
		$data['pageTitle'] = "Add / Update Product ";
		$data['cssclass']= "active";
		$this->load->view('templates/header', $data);
		$this->load->view('pages/product_info');
		$this->load->view('templates/footer');
		
		//$this->output->enable_profiler(TRUE);
	}
}

/* End of file productInfoController.php */
/* Location: ./application/controllers/productInfoController.php */