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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-calendar-alt"></span> Payment Manager</h1>
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
                           <th>Booking Code</th>
                           <th>Payment Type</th>
                           <th>Payment Date</th>
                           <th>Remarks</th>
                           <th>Proof of Payment</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>BKNG-454-21</td>
                           <td><span class="badge bg-info" style="padding-top:10px;height:30px;width:50px;text-align:center">GCASH</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
                        </tr>
                        <tr>
                           <td>BKNG-456-21</td>
                           <td><span class="badge bg-info" style="padding-top:10px;height:30px;width:50px;text-align:center">GCASH</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
                        </tr>
                        <tr>
                           <td>BKNG-112-21</td>
                           <td><span class="badge bg-warning" style="padding-top:10px;height:30px;width:50px;text-align:center">BANK</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
                        </tr>
                        <tr>
                           <td>BKNG-986-21</td>
                           <td><span class="badge bg-warning" style="padding-top:10px;height:30px;width:50px;text-align:center">BANK</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>                           
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
                        </tr>
                        <tr>
                           <td>BKNG-775-21</td>
                           <td><span class="badge bg-warning" style="padding-top:10px;height:30px;width:50px;text-align:center">BANK</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
                        </tr>
                        <tr>
                           <td>BKNG-543-21</td>
                           <td><span class="badge bg-info" style="padding-top:10px;height:30px;width:50px;text-align:center">GCASH</span></td>
                           <td>Nov 27, 2021</td>
                           <td>Remarks here</td>
                           <td><i class="nav-icon fa fa-file-invoice fa-3x"></i></td>
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