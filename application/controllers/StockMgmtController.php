<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StockMgmtController extends CI_Controller {

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
		echo "calling ";
		$data['pageTitle'] = "Stock Management";
		$data['cssclass']= "active";
		$this->load->view('templates/header', $data);
		$this->load->view('pages/stock_info');
		$this->load->view('templates/footer');
	}
}

/* End of file productInfoController.php */
/* Location: ./application/controllers/productInfoController.php */