<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_master');
		$this->load->library('Template');
        if(!$this->session->userdata('nik')) {
           $this->session->set_flashdata('message','Anda Mesti Login Terlebih Dahulu');
           redirect('Login');
        }
	}

	public function User()
	{
		$master['master'] = $this->M_master->user();
		$this->template->display('master/masteruser',$master);
	}

	function adduser(){
		$this->template->display('master/adduser');
	}

	function inputuser(){
		$nik      = $this->input->post('nik');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status   = $this->input->post('status');
		$data = array(
			'nik'      => $nik,
			'username' => $username,
			'password' => $password,
			'status'   => $status
		);
		$insert = $this->M_master->adduser($data);
		redirect('Master/User');
	}

	function showuser(){
		$id = $_GET['id'];
		$show['master'] = $this->M_master->showuser($id);
		$this->template->display('master/edituser',$show);
	}

	function edituser(){
		$id       = $this->input->post('userid');
		$nik      = $this->input->post('nik');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status   = $this->input->post('status');
		$data = array(
			'nik'      => $nik,
			'username' => $username,
			'password' => $password,
			'status'   => $status
		);
		$insert = $this->M_master->edituser($data,$id);
		redirect('Master/User');
	}

	function deleteuser(){
		$id = $_GET['id'];
		$delete = $this->M_master->deleteuser($id);
		redirect('Master/User');
	}
}
