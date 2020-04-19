<?php
class clientModel extends CI_Model{

function insert_client($data){
	$this->db->insert("client",$data);
}

function insert_user($data){
	$this->db->insert("user",$data);
}

}
?>