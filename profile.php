<?php require_once('./resource/config.php'); ?>




    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("./includes/top_toolbar.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

          

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800">Add Fun</h1> <br>
           </div>
        
          <div class="row" >
            <p style="background: #EEE" align="left"><img class="img-fluid" alt="Responsive image"  src="images/btc.png"> </p>
          </div>

          <div class="row overflow-auto">
             <h4>This is your bitcoin address send your funds here : </h4>
          </div>

          <div class="row overflow-auto">
              <h4  style="color: red;" class="font">1MEWQcLzvJfjcoEYP4hTZcFn4Pjt5Rs6Kr</h4>
          </div>





         

          <!-- Recent Transaction -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Recent Transaction</h1> <br>
             
          
              
     
          </div>
          <div class="row">
             <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">MENU</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="creditCard.php" class="nav-item nav-link active">Credit cards</a>
                <a href="banklogins.php" class="nav-item nav-link">Bank Logins</a>
                <a href="paypal.php" class="nav-item nav-link">Paypal Accounts</a>
                <a href="netflix.php" class="nav-item nav-link">Netflix Accounts</a>
      <!--     <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>   -->
        </div>
    </nav>
</div>

      <?php
          
          // chart();
       ?>
       <!-- <?php ; ?> -->
      <div class="table-responsive"> 
           <table id="example" class="table table-striped table-bordered overflow-auto" style="width:100%">
            <thead>
                <tr>
                    <th>Issuer</th>
                    <th>Card Number</th>
                    <th>Card Holder</th>
                    <th>Cvv</th>
                    <th>Pin</th>
                    <th>Expiry</th>
                    <th>Amount</th>
                    <th>Country</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                    <td>Visa</td>
                    <td>4718685143686955</td>
                    <td>Daniel Kitsin</td>
                    <td>148</td>
                    <td>1851</td>
                    <td>22</td>
                    <td>$350</td>
                    <td>Germany</td>
                    <td>$25</td>
                    <td style="color: white; background:green">purchased</td>
                </tr>
                <tr>
                    <td>Visa</td>
                    <td>4622235145646546</td>
                    <td>Mavis  k. Browm</td>
                    <td>587</td>
                    <td>8726</td>
                    <td>21</td>
                    <td>$210</td>
                    <td>United State</td>
                    <td>$18</td>
                    <td style="color: white; background:green">purchased</td>
                </tr>
                <tr>
                    <td>American Express</td>
                    <td>3753935145646546</td>
                    <td>Larry Periz</td>
                    <td>967</td>
                    <td>9740</td>
                    <td>22</td>
                    <td>$50</td>
                    <td>United State</td>
                    <td>$5</td>
                    <td style="color: white; background:green">purchased</td>

                </tr>
            </tbody>   
               
            </tfoot>
        </table>
      </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="./resource/usermanager.php?function=logout">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!-- ffffffffffff -->
  <script src="js/demo/card-table.js"></script>

  <!-- tables js -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   
    <script type="text/javascript">
      $(document).ready(function() {
                  $('#example').DataTable();
            } );
    </script>
  



</body>

</html>
