<?php
  require_once './resource/config.php';

?>





    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("./includes/top_toolbar.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
            <h1 class="h3 mb-0 text-gray-800" >Credit Cards</h1> <br>
             

          
              
     
          </div>
          <div class="row">

             <nav class="navbar navbar-expand-md navbar-light bg-light">
                  <a href="#" class="navbar-brand">MENU</a>

                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarCollapse">
                      <div class="navbar-nav">
                          <a href="creditcard.php" class="nav-item nav-link active">Credit cards</a>
                          <a href="checkout.php" class="nav-item nav-link">CheckOut</a>
                          <a href="profile.php" class="nav-item nav-link">Recent Transaction</a>
                          <!-- <a href="about.php" class="nav-item nav-link">Support</a> -->
                <!--     <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                      </div>
                      <div class="navbar-nav ml-auto">
                          <a href="#" class="nav-item nav-link">Login</a>
                      </div>   -->
                  </div>
              </nav>
            </div>
      
      <?php
          
          #chart();
          // register("sam","sam@gmail.com","sam");
       ?>
       <!-- <?php ; ?> -->
      <div class="table-responsive"> 
           <table id="example" class="table table-striped table-bordered overflow-auto" style="width:100%">
            <thead>
                <tr>
                    <th>Bank</th>
                    <th>Card Number</th>
                    <th>Card Holder</th>
                    <th>Cvv</th>
                    <th>Pin</th>
                    <th>Expiry</th>
                    <th>Amount</th>
                    <th>Country</th>
                    <th>Price</th>
                    <th>Add To Chart</th>
                </tr>
            </thead>
            <tbody>
<?php
    
    $result = $conn->query("SELECT * FROM cards") ;
 
while ($row = $result->fetch_object()) {

  
  $cardnumber = substr_replace($row->cardnumber, "******", 7);


$printTable =<<<EOT
<tr>
                    <td>$row->issuer</td>
                    <td>$cardnumber</td>
                    <td>$row->cardholder</td>
                    <td>***</td>
                    <td>****</td>
                    <td>$row->expiryyear</td>
                    <td>$row->amount</td>
                    <td>$row->country</td>
                    <td> $ $row->price</td>
                    <td> <a href="./resource/chartController.php?product_id=$row->card_id"><button type="button" class="btn btn-success"> <i class="fas fa-plus"></i> </button></a></td>
                </tr>
                
EOT;
echo $printTable;
}



?>

              

                <tr>
                    <td>Bank</td>
                    <td>Card Number</td>
                    <td>Card Holder</td>
                    <td>Cvv</td>
                    <td>Pin</td>
                    <td>Expiry Year</td>
                    <td>Expiry Year</td>
                    <td>Expiry Year</td>
                    <td>Expiry Year</td>
                    <td>Expiry Year</td>
                </tr>
              </tbody>   
            </tfoot>
        </table>
        
        
      </div>


        <button class="pull-left" style="float: right;">CheckOut</button>

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
