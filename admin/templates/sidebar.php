<?php 
    $cid=$_SESSION['email'];
    include "./conn.php";
                      
    $sql="select * from employee";
    $smt=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_assoc($smt);
?>
  
  <!-- ======= Sidebar ======= -->
  <head>
  <script>
    const active_tab = (event)=>{
      console.log(event,"g")
    }
    </script>
  </head>
  <aside id="sidebar" class="sidebar zindex-dropdown">
  <div class="sidebar">
    <ul class="nav nav-pills flex-column mb-auto">
    <?php
    include "./conn.php";
      $sql="select * from employee where emp_id ='$cid'";
      $smt=mysqli_query($conn,$sql);
      while($rs=mysqli_fetch_assoc($smt)){
      if($rs['admin']=='yes')
      {
        echo '<li>
        <a href="dashboard_admin.php" class="nav-link link-dark">
        <img class="me-2"src="https://img.icons8.com/material-sharp/20/000000/home.png"/>
          Dashboard
        </a>
      </li>
      <li>
        <a href="users.php" class="nav-link link-dark">
        <img class="me-2"src="https://img.icons8.com/ios-filled/20/000000/group-background-selected.png"/>
          Users
        </a>
      </li>
      <li>
        <a href="add_user.php" class="nav-link link-dark">
        <img class="me-2"src="https://img.icons8.com/material-sharp/20/000000/add-user-male.png"/>
          Add new user
        </a>
      </li>
      <li>
        <a href="assign_duty.php" class="nav-link link-dark">
        <img class="me-2"src="https://img.icons8.com/ios-filled/20/000000/clipboard.png"/>
          Assign duty
        </a>
      </li>';
       }
       else
       {
        echo ' <li>
        <a href="dashboard.php" class="nav-link link-dark">
        <img class="me-2"src="https://img.icons8.com/material-sharp/20/000000/home.png"/>
          Dashboard
        </a>
      </li>';
       }
    };
?>
    </ul>
  </aside><!-- End Sidebar-->

  