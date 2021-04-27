<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: url(img/background.JPG); background-size: cover;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-10 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgba(0, 0, 0, 0.5)">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"></h1><h2 style="color : white; font-family:serif">Aplikasi Pengaduan Masyarakat</h2><br>
                  </div>
                  <form class="user" method="post" action="cek_login.php">
                    <div class="form-group">
                      <input type="text" name="user_name" class="form-control form-control-user" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" minlength="8" class="form-control form-password form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" minlength="8" class="form-control form-password form-control-user" id="exampleInputPassword" placeholder="Password">
                      <input type="checkbox" class="form-checkbox" style="margin-top:8px; margin-left:5px;"> Show password
                    </div>
                    <div class="form-group">
                    <td>Captcha</td>
<!-- tentukan letak script generate gambar -->
<td ><img src="captcha.php" alt="gambar" />  </td>
</tr><br>
<td><input name="kodecaptcha" class="form-control form-password form-control-user" style="margin-top:5px;" placeholder="Masukkan Captcha" value="" maxlength="5"/></td>
<tr>
</tr>
</table>
                      
                    </div>
                    <input type="submit" class="btn btn-info btn-user btn-block" style="background: rgba(0, 0, 0, 0.5)" value="Login!">
                    
                    <hr>
        
                  </form>
                  <div class="text-center">
                    Belum Punya Akun?
                    <a class="small" href="register.php">Register!</a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>

</html>
