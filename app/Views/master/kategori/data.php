<?= $this->extend('template/default') ?>
<?= $this->section('content') ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Kategori Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Kategori</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="card">
          <div class="card-header">
            <h3 class="card-title">Management Kategori</h3>
          </div>
          <div class="col-md-2">
             <button type="button" class="btn btn-block bg-gradient-info btn-sm" data-toggle="modal" data-target="#modal-kategori">Tambah Kategori</button>
          </div>           
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="tabelkategori" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                 <tr role="row">
                    <th>No</th> 
                    <th>Nama</th> 
                    <th>Keterangan</th> 
                    <th>Create</th> 
                    <th>Update</th> 
                    <th>Aksi</th> 
                 </tr>
                </thead>
              <tbody>
                   <?php 
                   $no = 1;
                   foreach ($kategori as $list){ ?>
                   <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $list->nama_kategori;?></td>
                      <td><?php echo $list->keterangan;?></td>
                      <td><?php echo date('d-m-Y H:i:s',strtotime($list->created_at));?></td>
                      <td><?php echo date('d-m-Y H:i:s',strtotime($list->updated_at));?></td>
                      <td>
                         <button type="button" data-toggle="modal" value="<?php echo $list->idkategori;?>"  class="find_id_kategori" data-target="#modal-kategori"><i class="fas fa-edit"></i>Edit</button>
                         <a href="<?php echo base_url('Master_kategori/delete_data?id='.$list->idkategori);?>"><i class="fa fa-trash-alt"></i>Delete</a>
                      </td>
                   </tr>
                 <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
      </div>

      <script type="text/javascript">
         
      $(document).ready(function() {
        var table = $('#tabelkategori').DataTable( {  
          "paging": true,
      } );
      });
      </script>

      <div class="modal fade" id="modal-kategori">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="header">Form Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="isi_edit_kategori">
              <form role="form" action="Master_kategori/create_data" method="POST" id="form_kategori">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Kategori">
                    <input type="hidden" name="idkategori" value="" class="form-control" id="idkategori">
                    <small class="help-block"></small>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                    <small class="help-block"></small>
                  </div>
                <!-- /.card-body -->
               </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="submit" name="create" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


  <script type="text/javascript">
      $('.find_id_kategori').click(function(event){
         event.preventDefault();
        var id = $(this).val();
        var header = $('#header').text('Edit Kategori');
        // console.log(id);
        $.ajax({
        type: "POST",
        url : "Master_kategori/show_data",
        data: {id:id},
        dataType : "json",
        success: function (data){
          console.log(data);
           var result = '<form role="form" action="Master_kategori/update_data" method="POST" id="form_kategori">\n\
           <div class="card-body">\n\
                  <div class="form-group">\n\
                    <label for="nama">Nama Kategori</label>\n\
                    <input type="text" name="nama" class="form-control" value="'+data.nama_kategori+'" id="nama" placeholder="Nama Kategori">\n\
                    <input type="hidden" name="id" class="form-control" value="'+data.idkategori+'" id="id" placeholder="Nama Kategori">\n\
                    <small class="help-block"></small>\n\
                  </div>\n\
                  <div class="form-group">\n\
                    <label for="keterangan">Keterangan</label>\n\
                    <input type="text" name="keterangan" class="form-control" value="'+data.keterangan+'" id="keterangan" placeholder="Keterangan">\n\
                    <small class="help-block"></small>\n\
                  </div>\n\
                <!-- /.card-body -->\n\
               </div>\n\
            <div class="modal-footer justify-content-between">\n\
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\n\
              <button type="submit" id="submit" class="btn btn-primary">Save</button>\n\
            </div>\n\
            </form>';
          $("#isi_edit_kategori").html(result);            
        }
     });
    });

  </script>
<?= $this->endsection() ?> 