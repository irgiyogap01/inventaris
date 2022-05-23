<div class="login-box">
  <!-- <div class="login-logo">
  
  </div> -->
  <!-- /.login-logo -->
  <div class="card">
    <center>
  <a><img src="<?=base_url('assets/')?>images/ptpn5.png" width="90" height="90"/></a><br/>
</center>
    <div class="card-body login-card-body">
       
      <h3 class="login-box-msg"><b>LOGIN</b></h3>

      <form action="<?= base_url('auth/cek_login');?>" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->