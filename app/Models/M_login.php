<?php namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model {
	// protected $table = "tbl_mst_user";

	public function sign_in($data){
		// Cara lain menggunakan builder
		// return $this->table('products')
  //                       ->where('product_id', $id)
  //                       ->get()
  //                       ->getRowArray();

		$query = $this->db->query("SELECT * FROM tbl_mst_user where username='$data[username]' AND password='$data[password]'");
        return $query->getResult();
		
	}
}
