<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductCatDetailsController extends CI_Controller {
	
	/*public function index_get($groupId, $categoryId) {
		//$this->CategoryResource->getCategoriesIncludeGroups();
		$this->load->model('GroupResource');
		echo json_encode($this->GroupResource->getGroupProducts($groupId));
	}
*/
	public function __construct()
	{
		parent::__construct();
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
	public function index($groupId)
	{
		$data['groupId'] = $groupId;
		
		$data = array('groupId' => $groupId);
		      
		$this->load->view('templates/header');
		$this->load->view('pages/product_cat_details', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */