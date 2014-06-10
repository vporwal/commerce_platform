<?php
require_once('ProductItemModel.php');

class Group {
	public $id = 0;
	public $catId = 0;
	public $displayName = '';
	public $image = '';
	public $shortDesc = '';
	public $description = '';
	public $infoLink = '';
	public $seqNo = '';
	public $products = array();
	
	public function addProduct($product) {
		array_push($this->products, $product);
	}

}

class GroupModel extends CI_Model {

	public function __construct() {
		$this->load->database('ecommtradeing');
	}
	
	public function getGroupProducts($groupId) {
		
		$query = $this->db->query("SELECT prod_id, prod_name, prod_desc, img, img_path, prod_short_desc FROM product WHERE group_id ='". $groupId."'");
		$prodArray  = array();

		foreach ($query->result_array() as $record) { 
			$product = new Product;
			$product->group_id = $groupId;
			$product->product_id = $record["prod_id"];
			$product->product_name = $record["prod_name"];;
			$product->prod_desc = $record["prod_desc"];
			$product->img_name = $record["img"];
			//$product->img_path = $record["img_path"];
			$product->prod_short_desc = $record["prod_short_desc"];
			array_push($prodArray, $product);
		}

			//$objRows["groupProducts"] = $prodArray;
			//$objRows["groupId"] = $groupId;
			//return json_encode($objRows);
			return $prodArray;
		
		
	}
}

/* End of file GroupResource.php */