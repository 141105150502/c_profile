
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-5 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" id="formlogin">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <!-- <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div> -->
                    </div>
                    <button type="button" class="btn btn-primary btn-user btn-block" onclick="login()">
                      Login
                    </button>
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div> -->
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ?>auth/register">Buat akun</a>
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
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/sbadmin2/js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/sweetalert2/sweetalert2.all.min.js"></script>



  <script>
    $('#email').keypress(function (e) {
       var key = e.which;
       if(key == 13)  // the enter key code
        {
         login();
        }
      }); 

    $('#password').keypress(function (e) {
       var key = e.which;
       if(key == 13)  // the enter key code
        {
         login();
        }
      });


        

    
    function login(){
      var data = $('#formlogin').serialize();
      // alert(data);
      $.ajax({
        url : '<?php echo base_url() ?>auth/ceklogin',
        data: data,
        dataType: 'json',
        type:'post',
        success: function(respon){
          console.log(respon)
          if (respon.status == false) {
            // alert(respon.pesan)
            Swal.fire(respon.pesan);
          }else{
            // alert(respon.pesan)
            window.location.href = '<?php echo base_url() ?>dashboard'
          }
        }
      })
    }

  </script>

</body>

</html>
