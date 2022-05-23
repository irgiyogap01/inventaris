<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7 grid-margin stretch-card offset-md-2">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= base_url('User/update');?>">
             
                <div class="card-body">
                <input type="hidden" name="id" id="id" value="<?=$user['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?=$user['username']; ?>" id="username" name="username" placeholder="Masukkan Username...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" value="<?=$user['password']; ?>" id="password" name="password" placeholder="Masukkan Password...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" value="<?=$user['nama']; ?>" id="nama" name="nama" placeholder="Masukkan Nama Lengkap...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" value="<?=$user['jabatan']; ?>" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bagian</label>
                        <input type="text" class="form-control" value="<?=$user['bagian']; ?>" id="bagian" name="bagian" placeholder="Masukkan Bagian...">
                      </div>
                </div>
              
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  