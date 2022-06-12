  <!-- ======= Header ======= -->
  <?php 
    $cid=$_SESSION['email'];
    include "./conn.php";
                      
    $sql="select * from employee";
    $smt=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_assoc($smt);
  ?>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
      <a href="https://www.cmpdi.co.in/index.php?lang=Eng" class="logo d-flex align-items-center">
        <img class ="h-img" src="assets/img/android-chrome.png" alt="cmpdi logo">
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="https://png.pngtree.com/png-vector/20191125/ourmid/pngtree-beautiful-admin-roles-line-vector-icon-png-image_2035379.jpg" alt="Profile" class="rounded-circle">
            <?php
              include "./conn.php";


              $sl = 1;
              $sql = "select * from employee where emp_id ='$cid'";
              $smt = mysqli_query($conn, $sql);
              while ($rs = mysqli_fetch_assoc($smt)) {
                  echo '<span class="d-none d-md-block dropdown-toggle ps-2">'.$rs['emp_name'].'</span>';
              };
              ?>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <?php
              include "./conn.php";


              $sl = 1;
              $sql = "select * from employee where emp_id ='$cid'";
              $smt = mysqli_query($conn, $sql);
              while ($rs = mysqli_fetch_assoc($smt)) {
                  echo '  <h6>'.$rs['emp_name'].'</h6>
                          <span>'.$rs['designation'].'</span>';
              };
            ?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="change_password.php">
                <i class="bi bi-gear"></i>
                <span>Change Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="https://www.cmpdi.co.in/help.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->