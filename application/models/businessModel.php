<?php
class businessModel extends CI_Model{
function insert($data){
	$this->db->insert("business",$data);
}

function insert_client($data){
	$this->db->insert("pet",$data);
}
}
?>