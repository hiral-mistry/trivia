<?php
class Gamemodel extends CI_Model {

    // insert 
    function ins($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return $this->db->insert_id();
		} else {
			return false;
		}
    }
    
    // get data with condition
    function GetWhereData($table, $where)
	{
		$this->db->where($where);
		$result = $this->db->get($table);
		return $result->row_array();
    }
    
    // get data without contion
    function GetData($table)
	{
		$result = $this->db->get($table);
		return $result->result_array();
    }

    
    
}