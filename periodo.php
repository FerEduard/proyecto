<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Inicio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/estilo.css" rel="stylesheet">
  <!-- Styles -->

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
	<?php include("inc/head.php") ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Periodos</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Inicio</th>
                          <th scope="col">Fin</th>
                          <th scope="col"><a href="#" class="btn btn-info btn-circle">
                          		<i class="fas fa-plus"></i>
                              </a></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>01/01/2017</td>
                          <td>31/12/2017</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-pen"></i>
                              </a>
                              <a href="#" class="btn btn-danger btn-circle">
                          		<i class="fas fa-trash"></i>
                              </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>01/01/2018</td>
                          <td>31/12/2018</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-pen"></i>
                              </a>
                              <a href="#" class="btn btn-danger btn-circle">
                          		<i class="fas fa-trash"></i>
                              </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>01/01/2019</td>
                          <td>31/12/2019</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-pen"></i>
                              </a>
                              <a href="#" class="btn btn-danger btn-circle">
                          		<i class="fas fa-trash"></i>
                              </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                </div>
              </div>
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Has terminado?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Salir" para cerrar sesión.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="login.php">Salir</a>
        </div>
      </div>
    </div>
  </div>
<?php include("inc/foot.php") ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
