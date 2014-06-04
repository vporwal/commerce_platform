<?php

	class Category {
		public $id = 0;
		public $displayName = '';
		public $groups = array();
		
		public function addGroup($group) {
			array_push($this->groups, $group);
		}
	}
	
	class Group {
		public $id = 0;
		public $displayName = '';
		public $template_type = '';
		public $image_path = '';
		public $image = '';
		public $shortDesc = '';
		public $description = '';
		public $infoLink = '';
		public $products = array();
		
		public function addProduct($product) {
			array_push($this->products, $product);
		}
	}
	
	class Product {
		public $group_id;
		public $product_id;
		public $product_name;
		public $prod_desc;
		public $img_name;
		public $img_path;
		public $prod_short_desc;
		public $template_type;
	}
class Product_Category extends CI_Model {
	
	public function __construct() {
		$this->load->database('ecommtradeing');
	}
	
	public function getAllProductsAndCategories() {
echo '>>';
		$query = $this->db->query("select * from online_trade.groups ");
echo '>>--- '.$query->num_rows().'<<<';
		//$resultSet = $query->result_array();
				$array_ = array();
				$categoryId = '';
				$category = new Category;
				$array_ = array();
				foreach ($query->result_array() as $record) { 
					if ($categoryId == $record["cat_id"]) {
						$Group = new Group;
						$Group->displayName = $record["group_name"];
						$Group->id = $record["group_id"];
						$Group->template_type = $record["template_type"];
						$Group->image_path = $record["img_path"];
						$Group->image = $record["group_img"];
						$Group->shortDesc = $record["short_desc"];
						$Group->description = $record["group_desc"];
						$Group->infoLink = $record["infolink"];
						$category->addgroup($Group);
					} else {
						$category = new Category;
						$category->id = $record["cat_id"];
						$category->displayName = $record["cat_name"];
						
						$Group = new Group;
						$Group->displayName = $record["group_name"];
						$Group->id = $record["group_id"];
						$Group->template_type = $record["template_type"];
						$Group->image_path = $record["img_path"];
						$Group->image = $record["group_img"];
						$Group->shortDesc = $record["short_desc"];
						$Group->description = $record["group_desc"];
						$Group->infoLink = $record["infolink"];
						$category->addgroup($Group);
						$categoryId = $record["cat_id"];
						array_push($array_, $category);
					}				
				}
				$objRows["prodCategory"] = $array_;
			//}
			$_SESSION["navigationLinks"] = $objRows; 
			return $objRows;
	}
}