<?php 
namespace App\Controllers;

use App\Models\M_master;
class Master_kategori extends BaseController {

  function __construct(){
    $this->M_master = new M_master();
        if(!session()->get('username')) {
           session()->setFlashdata('message','Anda Harus Login terkebih Dahulu');
           return redirect()->to(base_url('Login'));
        }

  }

  public function index()
  {
    $data['kategori'] = $this->M_master->getkategori();
    return view('master/kategori/data',$data);
    // return view('master/kategori/data');
  }


  public function create_data(){
    $nama       = $this->request->getPost('nama');
    $keterangan = $this->request->getPost('keterangan');
    $kirimdb = [
        'nama_kategori' => $nama,
        'keterangan'    => $keterangan,
        'created_at'    => date('Y-m-d H:i:s'),
        'updated_at'    => date('Y-m-d H:i:s')
    ];
    $aksi    = $this->M_master->create_data('tbl_mst_kategori',$kirimdb);
     return redirect()->to(base_url('Master_kategori'));
    // echo var_dump($kirimdb);
  }

  public function show_data(){
     $id   = $_POST['id'];
     $data = $this->M_master->show_data($id);
     echo json_encode($data);
  }


  public function update_data(){
    $id         = $this->request->getPost('id');
    $nama       = $this->request->getPost('nama');
    $keterangan = $this->request->getPost('keterangan');
    $kirimdb = [
        'nama_kategori' => $nama,
        'keterangan'    => $keterangan,
        'updated_at'    => date('Y-m-d H:i:s')
    ];
    $aksi    = $this->M_master->update_data('tbl_mst_kategori',['idkategori' => $id],$kirimdb);
    return redirect()->to(base_url('Master_kategori'));
    // echo var_dump($kirimdb);
  }


  public function delete_data(){
    $id = $_GET['id'];
    $data = $this->M_master->delete_data('tbl_mst_kategori',['idkategori' => $id]);
    return redirect()->to(base_url('Master_kategori'));
  }


}
