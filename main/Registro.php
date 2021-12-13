<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/monster-admin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:35:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper"> 
        
        <div class="" style="background-image:url(../assets/images/background/login-register.jpg);">   
            <br>     
            <div class="login-box card">
            <div class="card-body"> 
                 <form class="pt-3" id="form" method="POST" action="../controlador/Registro.php" autocapitalize="off" >
                    <h3 class="box-title mb-3">Registrarse</h3>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Primer_Nombre" name="P_Nombre" placeholder="Primer nombre" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Segundo_Nombre" name="S_Nombre" placeholder="Segundo nombre" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Primer_apellido" name="P_apellido" placeholder="Primer apellido" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Segundo_apellido" name="S_apellido" placeholder="Segundo apellido" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="Doc_identidad" name="Doc_identidad" placeholder="Doc Identidad" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <select id="rol" name="rol" class="form-select  form-control-lg" aria-label="Default select example" required>
                    <option selected>Seleccionar rol</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mt-3">
                  <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a> -->
                   <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="registro" type="submit">Registrar</button>
                </div>
                
                
               
              </form>
            </div>
          </div>
          <br>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script> 

    <script src="../ajax/validar_login.js"></script>

    <script src="../ajax/jquery-3.6.0.js"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/monster-admin/main/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:35:44 GMT -->
</html>