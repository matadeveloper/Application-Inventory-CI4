<?php namespace App\Controllers;

use App\Models\M_login;
class Dashboard extends BaseController {

	function __construct(){
		$this->M_login = new M_login();
        if(!session()->get('username')) {
           session()->setFlashdata('message','Anda Harus Login terkebih Dahulu');
           return redirect()->to(base_url('Login'));
        }
	}

	public function index()
	{
		return view('dashboard');
	}

	public function log_out() {
        $array_items = ['fullname', 'username'];
       session()->remove($array_items);
       session()->setFlashdata('message','Anda Berhasil Keluar'); 
       return redirect()->to(base_url('Login'));
    }

}
