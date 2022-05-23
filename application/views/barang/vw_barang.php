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
              <li class="breadcrumb-item active">Data Barang</li>
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
                  Tambah Data Barang
                </button>
              </div>
              <div class="card-body">
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pabrik</th>
                    <th>Merek</th>
                    <th>Tipe</th>
                    <th>Keterangan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($barang as $us) : ?>

                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td> <?= $us['nama']; ?></td>
                        <td> <?= $us['pabrik']; ?></td>
                        <td> <?= $us['merek']; ?></td>
                        <td> <?= $us['tipe']; ?></td>
                        <td> <?= $us['keterangan']; ?></td>
                        <td align="center">
                            <a href="<?= base_url('Barang/edit/') . $us['kode_barang']; ?>" class="badge badge-success"><i class="fa fa-pencil-alt"></i></a>
                            <a href="<?= base_url('Barang/hapus/') . $us['kode_barang']; ?>" class="badge badge-danger"><i class="fa fa-trash-alt"></i></a>
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
              <h4 class="modal-title">Form Data Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url('Barang/tambah');?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pabrik</label>
                    <input type="text" class="form-control" id="pabrik" name="pabrik" placeholder="Masukkan Nama Pabrik...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Merek</label>
                    <input type="text" class="form-control" id="merek" name="merek" placeholder="Masukkan Merek...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe...">
                  </div>
                  <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan..."></textarea>
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