<?php
class serviceModel extends CI_Model{

function insert_service($data){
	$this->db->insert("service",$data);
}

function insert_user($data){
	$this->db->insert("user",$data);
}

}
?>