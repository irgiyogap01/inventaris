<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Barang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Input Barang Masuk</li>
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
          <div class="col-md-12 ">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Input Barang Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?= base_url('Barang/update');?>">
             
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleInputEmail1">SN</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan SN...">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputFile">SPB (Foto/Pdf)</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Diterima Oleh</label>
                        <input type="text" class="form-control"  id="merek" name="merek" placeholder="Diterima Oleh...">
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">No Hp</label>
                        <input type="text" class="form-control"  id="tipe" name="tipe" placeholder="Masukkan No Hp...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Status</label>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" value="Penerimaan" id="customRadio1" name="status">
                          <label for="customRadio1" class="custom-control-label">Penerimaan</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio"  value="Pengembalian" id="customRadio2" name="status">
                          <label for="customRadio2" class="custom-control-label">Pengembalian</label>
                        </div>
                      </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Kondisi</label>
                        <input type="text" class="form-control"  id="tipe" name="tipe" placeholder="Masukkan Kondisi...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Posisi</label>
                        <input type="text" class="form-control"  id="merek" name="merek" placeholder="Masukkan Posisi...">
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Log Date</label>
                        <input type="text" class="form-control"  id="merek" name="merek" placeholder="Masukkan Merek...">
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>No AU31</label>
                        <select class="form-control">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Periode</label>
                        <input type="text" class="form-control"  id="merek" name="merek" placeholder="Masukkan Merek...">
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Nama Vendor</label>
                        <select class="form-control">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">User</label>
                        <input type="text" class="form-control"  id="tipe" name="tipe" placeholder="Masukkan Tipe..." disabled>
                        </div>
                    <!-- <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan..."></textarea>
                        </div> -->
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
  