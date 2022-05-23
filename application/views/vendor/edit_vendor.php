<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit Vendor</li>
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
                <h3 class="card-title">Edit Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= base_url('Vendor/update');?>">
             
                <div class="card-body">
                <input type="hidden" name="id" id="id" value="<?=$vendor['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" value="<?=$vendor['nama']; ?>" id="nama" name="nama" placeholder="Masukkan Nama Vendor...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama PIC</label>
                    <input type="text" class="form-control" value="<?=$vendor['nama_PIC']; ?>" id="nama_PIC" name="nama_PIC" placeholder="Masukkan Nama PIC...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No.HP PIC</label>
                    <input type="number" class="form-control" value="<?=$vendor['noHP']; ?>" id="noHP" name="noHP" placeholder="Masukkan Nomor HP PIC...">
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
  