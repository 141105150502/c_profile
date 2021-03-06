
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/sweetalert2/sweetalert2.all.min.js"></script>

    

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" >
    <div class="card o-hidden border-0 shadow-lg my-5 col-md-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register</h1>
              </div>
              <form class="user" id="formregister">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Username" value="">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Email" value="">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" value="">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" value="">
                  </div>
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="notelp" id="notelp" placeholder="Nomor Telepon" value="">
                </div>
                <button type="button" class="btn btn-primary btn-user btn-block" id="btnregister" onclick="register()">
                  Register
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo base_url() ?>auth">Sudah Memilki Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/sbadmin2/js/sb-admin-2.min.js"></script>


  <script>
    // $('#btnregister').(function(){
    //   alert('ok');
    // })

    


    function register(){
      var data = $('#formregister').serialize();
      // alert(data);
      $.ajax({
        url : '<?php echo base_url() ?>auth/prosesregister',
        data: data,
        dataType: 'json',
        type:'post',
        success: function(respon){
          if (respon.status == false) {
            Swal.fire('info',respon.pesan)
          }else{
            Swal.fire('info',respon.pesan)
            window.location.href = '<?php echo base_url() ?>auth';
          }
        }
      })
    }

    
  </script>

</body>

</html>
