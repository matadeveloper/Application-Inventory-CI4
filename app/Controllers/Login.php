<?php namespace App\Controllers;

use App\Models\M_login;
class Login extends BaseController {
     //pemanggilan pertama kali controller dijalankan 
	public function __construct() {
		// Mendeklarasikan class ProductModel menggunakan $this->M_login
		// parent::__construct();
		$this->M_login = new M_login();
		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Login 
        */
        // Jika Ada session username maka akan dialihkan ke halaman dashboard
       
	}

	public function index()
	{
		if(session()->get('username')) {
           return redirect()->to(base_url('Dashboard'));
        }
		return view('login');
	}

	public function sign_in(){
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		//kita jadikan inputan sebagai data array yang akan kita kirimkan menuju model
		$data     = ['username' => $username,'password' => $password];
		$login    = $this->M_login->sign_in($data);
		if(count($login) > 0){  // fungsi ini kita mengecek apakah data ada atau tidak, kalau data ada maka akan dibuat session dan dialihkan ke halaman dashboard
			$data = $login[0];
				$sess = [
					'fullname' => $data->fullname,
					'username' => $data->username
				];
			session()->set($sess);
			return redirect()->to(base_url('Dashboard'));
			// print_r($login);
		}else{
			session()->setFlashdata('message','Kombinasi Username dan Password Anda Salah');
			return redirect()->back();
		}
	}
}
