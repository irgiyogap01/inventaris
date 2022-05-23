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
                  <a href="<?=base_url('BarangMasuk/Haltambah') ?>">
              <button type="button" class="btn btn-info">
                  Tambah Data Barang
                </button></a>
              </div>
              <div class="card-body">
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>SN</th>
                    <th>SPB</th>
                    <th>Diterima Oleh</th>
                    <th>No Hp</th>
                    <th>Status</th>
                    <th>Kondisi</th>
                    <th>Posisi</th>
                    <th>Tgl Masuk</th>
                    <th>Log Date</th>
                    <th>No AU31</th>
                    <th>Periode</th>
                    <th>Nama Vendor</th>
                    <th>User</th>
                    <th></th>
                  </tr>
                  </thead>
                  <!-- <tbody>
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
                  </tbody> -->
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