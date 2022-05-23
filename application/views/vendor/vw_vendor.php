<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Vendor</li>
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
                  Tambah Data Vendor
                </button>
              </div>
              <div class="card-body">
              
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama PIC</th>
                    <th>No.HP PIC</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($vendor as $us) : ?>

                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td> <?= $us['nama']; ?></td>
                        <td> <?= $us['nama_PIC']; ?></td>
                        <td> <?= $us['noHP']; ?></td>
                        <td align="center">
                            <a href="<?= base_url('Vendor/edit/') . $us['id']; ?>" class="badge badge-success"><i class="fa fa-pencil-alt"></i></a>
                            <a href="<?= base_url('Vendor/hapus/') . $us['id']; ?>" class="badge badge-danger"><i class="fa fa-trash-alt"></i></a>
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
              <h4 class="modal-title">Form Data Vendor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url('Vendor/tambah');?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_PIC" name="nama_PIC" placeholder="Masukkan Nama PIC...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No.HP PIC</label>
                    <input type="number" class="form-control" id="noHP" name="noHP" placeholder="Masukkan No.HP PIC...">
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