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
              <li class="breadcrumb-item active">Data AU31</li>
            </ol>
          </div>
        </di````pv>
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
                  Tambah Data AU31
                </button>
              </div>
              <div class="card-body">
              
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>No AU31</th>
                    <th>Keterangan</th>
                    <th>No Paket</th>
                    <th>Nama Pekerjaan</th>
                    <th>Triwulan</th>
                    <th>document</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($au31 as $us) : ?>

                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td> <?= $us['no_au31']; ?></td>
                        <td> <?= $us['keterangan']; ?></td>
                        <td> <?= $us['no_paket']; ?></td>
                        <td> <?= $us['nama_pekerjaan']; ?></td>
                        <td> <?= $us['triwulan']; ?></td>
                        <td> <?= $us['document']; ?></td>  
                        <td align="center">
                            <a href="<?= base_url('Au31/edit/') . $us['id']; ?>" class="badge badge-success"><i class="fa fa-pencil-alt"></i></a>
                            <a href="<?= base_url('Au31/hapus/') . $us['id']; ?>" class="badge badge-danger"><i class="fa fa-trash-alt"></i></a>
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
              <h4 class="modal-title">Form Data AU31</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="<?= base_url('Au31/tambah');?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No AU31</label>
                    <input type="text" class="form-control" id="no_au31" name="no_au31" placeholder="Masukkan No AU31...">
                  </div>
                  <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan..."></textarea>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Paket</label>
                    <input type="text" class="form-control" id="no_paket" name="no_paket" placeholder="Masukkan No Paket...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Masukkan Nama Pekerjaan...">
                  </div>
                  <div class="form-group">
                  <label>Triwulan</label>
                    <select class="form-control" style="width: 100%;" id="triwulan" name="triwulan">
                      <option selected="selected">--Pilih Triwulan--</option>
                      <option value="Triwulan 1">Triwulan 1</option>
                      <option value="Triwulan 2">Triwulan 2</option>
                      <option value="Triwulan 3">Triwulan 3</option>
                      <option value="Triwulan 4">Triwulan 4</option>
                  </select>
                </div>
                <div class="form-group">
                        <label for="exampleInputFile">Document (Foto/Pdf)</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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