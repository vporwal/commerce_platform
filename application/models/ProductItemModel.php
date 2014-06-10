<?php

class Product {
	public $group_id;
	public $product_id;
	public $product_name;
	public $prod_desc;
	public $img_name;
	//public $img_path;
	public $prod_short_desc;
	//public $template_type;
}

class ProductItemModel extends CI_Model {
	
	public function __construct() {
		//$this->load->database('ecommtradeing');
	}
}