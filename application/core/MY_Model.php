<?php
date_default_timezone_set('Asia/Kolkata');
if (!defined('BASEPATH'))
    EXIT("No direct script access allowed");

class MY_Model extends CI_Model {

    public $image_url = '';
 	public function __construct() {
        parent::__construct();
        $this->load->database();
	}

	function get_row($tablename,$condition)
	{
		$this->db->select('*');
		$this->db->from($tablename);		
		$this->db->where($condition);
		$query = $this->db->get();
		return $result = $query->num_rows();
	}



	function getTableData($table_name, $condition ="", $field ,$get_data = 1,$order = "", $order_by="" , $limit = "", $start=""){
		$this->db->select($field); 
		$this->db->from($table_name);   
		$this->db->where($condition);
		$this->db->order_by($order, $order_by); 
		if($limit!="" &&  $start!=""){
			$this->db->limit($limit, $start); 
		}		
		$query = $this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows())
		{
		    $result = $query->result_array(); 
		    
		    if($get_data == '1'){
			 $table_data = array();
		    foreach ($result as $key => $value) {
		        	 $table_data = $value;
		    }
		}
		else{
			$table_data = $result;
		}
			
		return $table_data;
		}		
		
	}
	


	function getTableRowData($table_name, $condition ="", $field ,$get_data = 1,$order = "", $order_by="" , $limit = "", $start=""){
		$this->db->select($field); 
		$this->db->from($table_name);   
		$this->db->where($condition);
		$this->db->order_by($order, $order_by); 
		if($limit!="" &&  $start!=""){
			$this->db->limit($limit, $start); 
		}		
		$query = $this->db->get();
		//echo $this->db->last_query();
		if($query->num_rows())
		{
		    $result = $query->row_array(); 
		    
		    if($get_data == '1'){
			 $table_data = array();
		    foreach ($result as $key => $value) {
		        	 $table_data = $value;
		    }
		}
		else{
			$table_data = $result;
		}
			
		return $table_data;
		}		
		
	}
}
?>