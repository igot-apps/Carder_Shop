    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="creditcard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> The Ultimate Carder  <sup>!</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <div>



       <!-- Profile photor --> 
        <a href="creditcard.php"> <img class="rounded-circle mx-auto d-block" alt="Generic placeholder thumbnail" src="images/profile_pics/head_wet_asphalt.png" width="100px"> </a>    

          <div style="margin: 25px" class="text-center text-light">
            <h6><?php echo "Welcome ".$_SESSION['loggedin_user']; ?> <br>
             your balance is $0.00</h6><br>

            
            <a href="profile.php" class="text-light">
              <span> <i class="fas fa-plus"></i> Add Fun<br></span>
          
            </a>

            <a href="checkout.php" class="text-light"> <i class="fas fa-shopping-cart"></i> Cart : <?php if (isset($_SESSION['itemCount'])) {
              echo $_SESSION['itemCount'];
            }else{
              echo 0;
            } 
             
            ?> </a> <br>


            <a href="profile.php" class="text-light">
              <span> <i class="fas fa-dollar-sign"></i> Wallet : $0.00<br></span> 
              
            </a>

            
          </div>        
       </div>

    
      

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
            
          </div>
        </div>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->