<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
          <?= $this->session->flashdata('message');?>
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data User
                </button>
              </div>
              <div class="card-body">
              
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Bagian</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($pengguna as $us) : ?>

                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td> <?= $us['username']; ?></td>
                        <td> <?= $us['password']; ?></td>
                        <td> <?= $us['nama']; ?></td>
                        <td> <?= $us['jabatan']; ?></td>
                        <td> <?= $us['bagian']; ?></td>
                        <td align="center">
                            <a href="<?= base_url('User/edit/') . $us['id']; ?>" class="badge badge-success"><i class="fa fa-pencil-alt"></i></a>
                            <a href="<?= base_url('User/hapus/') . $us['id']; ?>" class="badge badge-danger"><i class="fa fa-trash-alt"></i></a>
                        </td>    
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url('User/tambah');?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bagian</label>
                    <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Masukkan Bagian...">
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="Tambah" class="btn btn-primary">Tambah Data</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>