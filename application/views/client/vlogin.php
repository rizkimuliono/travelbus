<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi Pemesanan Tiket BUS">
  <meta name="author" content="CV.TravelBus">
  <title>Travel Bus Login</title>
  <link href="<?=base_url()?>SB-ADMIN-2/vendor/fontawesome-free/css/all.min.css" type="text/css">
  <link href="<?=base_url()?>SB-ADMIN-2/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    LOGO TRAVEL DISINI
                    <br>
                    <h1 class="h4 text-gray-900 mb-4">LOGIN USER CLIENT</h1>

                    <?php if($this->session->flashdata('msg')): ?>
                      <div class="alert alert-danger"><?=$this->session->flashdata('msg'); ?></div>
                    <?php endif; ?>

                  </div>
                  <form class="user" method="POST" action="<?=site_url('client/login_act')?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    Belum ada Akun? klik <a class="small" href="register.html">Buat Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>SB-ADMIN-2/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>SB-ADMIN-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>SB-ADMIN-2/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>SB-ADMIN-2/js/sb-admin-2.min.js"></script>
</body>
</html>
