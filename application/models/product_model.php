<?php
class Product_Model extends CI_Model {
	
	var $productId= '';
	var $product_code= '';
	var $particulars= '';
	var $brand= '';
	var $size= '';
	var $thickness= '';
	var $width= '';
	var $unitOfMeasure= '';
	var $unitOfMeasureId= '';
	var $wtPerSheet= '';
	var $availableQty= '';
	
	public function __construct() {
		$this->load->database('default');
	}
	
	public function getProducts() {
		$query = $this->db->query("SELECT A.PRODUCT_CODE product_code, A.PRODUCT_ID productId, D.DESCRIPTION THICKNESS, PRODUCT_NAME, PRODUCT_SIZE FROM PRODUCT_DETAILS A, " .
			"PRODUCT_SIZES B, PRODUCT C, PRODUCT_THICKNESS D WHERE A.PRODUCT_CODE = C.PRODUCT_ID AND A.PARTICULARS = " . 
			"B.PRODUCT_SIZE_ID AND A.THICKNESS = D.THICKNESS");
		/*foreach ($query->result() as $row)
		{
			echo $row->PRODUCT_ID;
			echo $row->PRODUCT_NAME;
			echo $row->PRODUCT_SIZE;
		}*/
		return $query->result_array();
	}
}