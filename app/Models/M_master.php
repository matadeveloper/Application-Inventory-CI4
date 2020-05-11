<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_master extends Model {

	public function getkategori(){
		$query = $this->db->table('tbl_mst_kategori')->get();
        return $query->getResult();
		
	}

	public function show_data($id){
		$query = $this->db->query("SELECT * from tbl_mst_kategori where idkategori='$id'");
        return $query->getRow();		
	}

	//

	public function create_data($table, $data)
    {
        $this->db->transBegin();
		$this->db->table($table)->insert($data);

		if ($this->db->transStatus() === FALSE)
		{
		        $this->db->transRollback();
		        return false;
		}
		else
		{
		        $this->db->transCommit();
		        return true;
		}
    }

    public function update_data($table,$id,$data)
    {
        $this->db->transBegin();
        $builder = $this->db->table($table);
		$builder->where($id)->update($data);

		if ($this->db->transStatus() === FALSE)
		{
		        $this->db->transRollback();
		        return false;
		}
		else
		{
		        $this->db->transCommit();
		        return true;
		}
    }

    public function delete_data($table,$pk)
    {
    	$builder = $this->db->table($table);
        return $builder->where($pk)->delete();
    } 
}
