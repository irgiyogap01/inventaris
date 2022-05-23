<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit AU31</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Edit AU31</li>
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
                <h3 class="card-title">Edit AU31</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= base_url('Au31/update');?>">
             
              <div class="card-body">
                <input type="hidden" name="id" id="id" value="<?=$au31['id']; ?>">
                <div class="form-group">
                    <label for="exampleInputPassword1">No AU31</label>
                    <input type="text" class="form-control" value="<?=$au31['no_au31']; ?>" id="no_au31" name="no_au31" placeholder="Masukkan No AU31...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" class="form-control" value="<?=$au31['keterangan']; ?>" id="keterangan" name="keterangan" placeholder="Masukkan Nama Keterangan...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Paket</label>
                    <input type="text" class="form-control" value="<?=$au31['no_paket']; ?>" id="no_paket" name="no_paket" placeholder="Masukkan No Paket...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" value="<?=$au31['nama_pekerjaan']; ?>" id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Masukkan Nama Pekerjaan...">
                  </div>
                  <div class="form-group">
                  <label>Triwulan</label>
                    <select class="form-control"  style="width: 100%;" id="triwulan" name="triwulan">
                    <option type="text" value="<?=$au31['triwulan']; ?>" selected="selected"></option>
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
  