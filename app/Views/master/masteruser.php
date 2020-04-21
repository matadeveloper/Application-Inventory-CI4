
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Management User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                 <tr role="row">
                    <th>NO</th> 
                    <th>NIK</th> 
                    <th>Username</th> 
                    <th>Password</th> 
                    <th>Status</th> 
                    <th>Aksi</th> 
                 </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($master as $list) { ?>
                <tr role="row" class="odd">
                  <td><?php echo $no++;?></td>
                  <td><?php echo $list->nik;?></td>
                  <td><?php echo $list->username;?></td>
                  <td><?php echo $list->password;?></td>
                  <td><?php if($list->status == 1){ echo "Aktif"; }else{ echo "Tidak Aktif";} ?></td>
                  <td>
                    <a href="<?php echo base_url('Master/showuser?id='.$list->userid);?>"><i class="fas fa-edit"></i>Edit</a>
                    <a href="<?php echo base_url('Master/deleteuser?id='.$list->userid);?>"><i class="fa fa-trash-alt"></i>Delete</a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card-footer">
            <a href="<?php echo base_url();?>Master/adduser" class="btn btn-primary">Tambah User</a>
          </div>

  </div>