<?php
class contactModel extends CI_Model{
function insert($data){
	$this->db->insert("contact",$data);
}
}
?>