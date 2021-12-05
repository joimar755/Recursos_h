<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body> 


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>¡Hola! empecemos</h4>
              <h6 class="fw-light">Resgitrarse </h6>
              <form class="pt-3" id="form" method="POST" action="../../Controlador/Registro.php" autocapitalize="off" >
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
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script> 
  <script src="../../ajax/validar_login.js"></script> 
  <script src="../../ajax/jquery-3.6.0.js"></script>
  <!-- endinject -->
</body>

</html>