<?php

 
class Data_model extends CI_Model
{
	
	
	function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
	}

	function get_table_data($table)
	{
		$res=$this->db->get($table);
		return $res->result_array();
		# code...
	}
}

?>