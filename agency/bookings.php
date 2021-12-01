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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-calendar-alt"></span> Total Bookings</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Booking</li>
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
               <div class="card card-info">

               <div class="col-md-12 table-responsive"><br>
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Agency</th>
                           <th>Tour Package</th>
                           <th>Customer Name</th>
                           <th>Total Amount</th>
                           <th>Payment Status</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 1</td>
                           <td>William Smith</td>
                           <td>Pph 12,000</td>
                           <td><span class="badge bg-info">pending</span></td>
                        </tr>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 2</td>
                           <td>Mark Otto</td>
                           <td>Pph 15,000</td>
                           <td><span class="badge bg-success">completed</span></td>
                        </tr>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 3</td>
                           <td>Jacob Thornton</td>
                           <td>Pph 12,000</td>
                           <td><span class="badge bg-danger">canceled</span></td>
                        </tr>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 4</td>
                           <td>William Tan</td>
                           <td>Pph 12,000</td>
                           <td><span class="badge bg-danger">canceled</span></td>
                        </tr>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 5</td>
                           <td>Johnny Lee</td>
                           <td>Pph 12,000</td>
                           <td><span class="badge bg-success">completed</span></td>
                        </tr>
                        <tr>
                           <td>ABC Agency Tours</td>
                           <td>Package 6</td>
                           <td>Mark Lim</td>
                           <td>Pph 12,000</td>
                           <td><span class="badge bg-success">completed</span></td>
                        </tr>
                        </tbody>
                  </table>
               </div>
            </div>
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
   <script src="../asset/js/bootstrap.bundle.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="../asset/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="../asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>s
   <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>