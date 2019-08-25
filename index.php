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
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
	<?php include("inc/head.php") ?>
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Nivel de Madurez actual</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="chartdiv"></div>
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
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
	<script src="vendor/amcharts/core.js"></script>
    <script src="vendor/amcharts/charts.js"></script>
    <script src="vendor/amcharts/themes/animated.js"></script>
    <!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

/* Create chart instance */
var chart = am4core.create("chartdiv", am4charts.RadarChart);

var data = [];
var value1 = 500;
var value2 = 600;

for(var i = 0; i < 12; i++){
  let date = new Date();
  date.setMonth(i, 1);
  value1 -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 50);
  value2 -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 50);
  data.push({date:date, value1:value1, value2:value2})
}

chart.data = data;

/* Create axes */
var categoryAxis = chart.xAxes.push(new am4charts.DateAxis());

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.extraMin = 0.2;
valueAxis.extraMax = 0.2;
valueAxis.tooltip.disabled = true;

/* Create and configure series */
var series1 = chart.series.push(new am4charts.RadarSeries());
series1.dataFields.valueY = "value1";
series1.dataFields.dateX = "date";
series1.strokeWidth = 3;
series1.tooltipText = "{valueY}";
series1.name = "Series 2";
series1.bullets.create(am4charts.CircleBullet);

var series2 = chart.series.push(new am4charts.RadarSeries());
series2.dataFields.valueY = "value2";
series2.dataFields.dateX = "date";
series2.strokeWidth = 3;
series2.tooltipText = "{valueY}";
series2.name = "Series 2";
series2.bullets.create(am4charts.CircleBullet);

chart.scrollbarX = new am4core.Scrollbar();
chart.scrollbarY = new am4core.Scrollbar();

chart.cursor = new am4charts.RadarCursor();

chart.legend = new am4charts.Legend();
 

}); // end am4core.ready()
</script>
</body>

</html>
