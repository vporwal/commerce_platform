<?php
require_once('GroupModel.php');

class Category {
	public $catId = 0;
	public $displayName = '';
	public $desc = 0;
	public $imgName = '';
	public $imgPath = 0;
	public $seqNo = '';
	public $groups = array();

	public function addGroup($group) {
		array_push($this->groups, $group);
	}
}

class CategoryModel extends CI_Model {
	
	public function __construct() {
		$this->load->database('ecommtradeing');
	}
	
	public function getCategoriesIncludeGroups() {
		$query = $this->db->query("select category.cat_id, cat_name, group_id, group_name, group_desc, group_img, infolink  from category, groups where category.cat_id = groups.cat_id order by category.cat_id, groups.seqNb");
		$array_ = array();
		$categoryId = '';
		$category = new Category;
		$array_ = array();
		foreach ($query->result_array() as $record) { 
			if ($categoryId == $record["cat_id"]) {
				$Group = new Group;
				$Group->displayName = $record["group_name"];
				$Group->id = $record["group_id"];
				$Group->image = $record["group_img"];
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
				$Group->image = $record["group_img"];
				$Group->description = $record["group_desc"];
				$Group->infoLink = $record["infolink"];
				$category->addgroup($Group);
				$categoryId = $record["cat_id"];
				array_push($array_, $category);
			}
		}
		
		return $array_;
	}
}

/* End of file CategoryResource.php */