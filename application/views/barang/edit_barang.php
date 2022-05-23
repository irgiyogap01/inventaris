<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Barang</li>
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
                <h3 class="card-title">Edit Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= base_url('Barang/update');?>">
             
                <div class="card-body">
                <input type="hidden" name="kode_barang" id="kode_barang" value="<?=$barang['kode_barang']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" value="<?=$barang['nama']; ?>" id="nama" name="nama" placeholder="Masukkan Nama Barang...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pabrik</label>
                    <input type="text" class="form-control" value="<?=$barang['pabrik']; ?>" id="pabrik" name="pabrik" placeholder="Masukkan Nama Pabrik...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Merek</label>
                    <input type="text" class="form-control" value="<?=$barang['merek']; ?>" id="merek" name="merek" placeholder="Masukkan Merek...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipe</label>
                    <input type="text" class="form-control" value="<?=$barang['tipe']; ?>" id="tipe" name="tipe" placeholder="Masukkan Tipe...">
                  </div>
                  <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan..."><?=$barang['keterangan']; ?></textarea>
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
  