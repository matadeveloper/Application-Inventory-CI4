<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {


	function user(){
		$query = $this->db->query("SELECT * FROM tbl_mst_user");
		return $query->result();
	}

	function adduser($data){
		$query = $this->db->query("INSERT Into tbl_mst_user(nik,username,password,status) VALUES ('$data[nik]','$data[username]','$data[password]','$data[status]')");
		return true;
	}

	function showuser($id){
		$query = $this->db->query("SELECT * FROM tbl_mst_user where userid='$id'");
		return $query->result();
	}

	function edituser($data,$id){
		$query = $this->db->query("UPDATE tbl_mst_user set nik='$data[nik]',username='$data[username]',password='$data[password]',status='$data[status]' where userid='$id'");
		return true;
	}

	function deleteuser($id){
		$query = $this->db->query("DELETE FROM tbl_mst_user where userid='$id'");
		return true;
	}
}
