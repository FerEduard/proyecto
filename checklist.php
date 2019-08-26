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
                  <h6 class="m-0 font-weight-bold text-primary">Check List</h6>
                  <div>
                  	<span>Periodo</span>
                    <select name="periodo" id="">
                    	<option value="3">Enero a Diciembre 2019</option>
                        <option value="2">Enero a Diciembre 2018</option>
                        <option value="1">Enero a Diciembre 2017</option>
                    </select>
                  </div>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Artículo</th>
                          <th scope="col">Requerimiento</th>
                          <th scope="col">Detalle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td><p class="btn btn-info btn-circle">3</p></td>
                          <td>13</td>
                          <td>Se evaluan y tratan adecuadamente los riesgos tecnológicos en los sistemas de información e infraestructura tecnológica.</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-list"></i>
                              </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td><p class="btn btn-warning btn-circle">2</p></td>
                          <td>15</td>
                          <td>Se evaluan y tratan adecuadamente los riesgos tecnológicos en los sistemas de información e infraestructura tecnológica.</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-list"></i>
                              </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td><p class="btn btn-danger btn-circle">0</p></td>
                          <td>15</td>
                          <td>Se evaluan y tratan adecuadamente los riesgos tecnológicos en los sistemas de información e infraestructura tecnológica.</td>
                          <td>
                          	  <a href="#" class="btn btn-success btn-circle">
                          		<i class="fas fa-list"></i>
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
