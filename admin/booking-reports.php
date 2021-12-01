<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php'?>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         
        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-chart-line"></span> Booking Reports</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Reports</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered mytable"> 
                              <thead>
                                 <tr>
                                     <th>Month</th>
                                     <th>Commission Amount</th>
                                 </tr>
                             </thead>
                                    <tbody>
                                       <tr>
                                           <td>January</td>
                                           <td>22</td>
                                       </tr>
                                       <tr>
                                           <td>February</td>
                                           <td>5</td>
                                       </tr>
                                       <tr>
                                           <td>March</td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <td>April</td>
                                           <td>15</td>
                                       </tr>
                                       <tr>
                                           <td>May</td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <td>June</td>
                                           <td>8</td>
                                       </tr>
                                       <tr>
                                           <td>July</td>
                                           <td>9</td>
                                       </tr>
                                       <tr>
                                           <td>August</td>
                                           <td>5</td>
                                       </tr>
                                       <tr>
                                           <td>September</td>
                                           <td>7</td>
                                       </tr>
                                       <tr>
                                           <td>October</td>
                                           <td>9</td>
                                       </tr>
                                       <tr>
                                           <td>November</td>
                                           <td>9</td>
                                       </tr>
                                       <tr>
                                           <td>December</td>
                                           <td>9</td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                            <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                  <!-- /.row -->
                  <!-- /.row (main row) -->
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- ./wrapper -->
      <!-- jQuery -->
      <script src="../asset/jquery/jquery.min.js"></script>
      <script src="../asset/js/adminlte.js"></script>
      <script src="../asset/js/canvasjs.min.js"></script>
   <script>
       window.onload = function () {

           var chart = new CanvasJS.Chart("chartContainer", {
               theme: "light1",
               animationEnabled: true,
               title: {
                   text: "Total Bookings"
               },
               data: [{
                   type: "pie",
                   indexLabelFontSize: 18,
                   radius: 80,
                   indexLabel: "{label} - {y}",
                   yValueFormatString: "###'%'",
                   click: explodePie,
                   dataPoints: [
                       { y: 8, label: "January" },
                       { y: 5, label: "February" },
                       { y: 7, label: "March" },
                       { y: 9, label: "April" },
                       { y: 10, label: "May" },
                       { y: 9, label: "June" },
                       { y: 9, label: "July" },
                       { y: 8, label: "August" },
                       { y: 7, label: "September" },
                       { y: 6, label: "October" },
                       { y: 7, label: "November" },
                       { y: 9, label: "December" }
                   ]
               }]
           });
           chart.render();

           function explodePie(e) {
               for (var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                   if (i !== e.dataPointIndex)
                       e.dataSeries.dataPoints[i].exploded = false;
               }
           }

       }
   </script>
   </body>
</html>