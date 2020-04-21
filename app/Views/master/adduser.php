<div class="content-wrapper" style="min-height: 1244.06px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambahkan User</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="<?php echo base_url('Master/inputuser');?>" method="POST">
                <div class="form-group">
                  <label>Nik</label>
                  <input class="form-control filter" type="text" name="nik" placeholder="Masukkan NIK" required="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control filter" type="text" name="username" placeholder="Masukkan Username" required="">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control filter" type="password" name="password" placeholder="Masukkan Password" required="">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" required="">
                    <option>--</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                  </select>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <!-- /.form-group -->
              </form>
            </div>
              <!-- /.col -->
             
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>