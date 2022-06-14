<?php include("auth.php"); ?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assign Duty</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- bootstrap-css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href="css/style-responsive.css" rel="stylesheet" />
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  

  <script>
   
    $(document).ready(function() {



      //Admin Login Start.....
      $("#btnRegister").click(function() {

        
        var emp= $("#emp").val();
        var dateofduty = $("#dateofduty").val();


        $.ajax({
          type: 'post',
          url: 'date.php',
          data: {
            'action': 'registration',
            'emp': emp,
            'dateofduty': dateofduty,
        
          },
          success: function(data) {

            alert(data);
            $("#btnRegister").html("Assign");
            $("#error_disp_register").html(data);
            $("#error_disp_register").slideDown("slow");
            $("#error_disp_register").slideUp(8000);
            $("#emp").val("");
            $("#dateofduty").val("");

          }

        });

      });
      //Admin Login End.....
    });
  </script>
  
</head>

<body>

  <?php include("./templates/header.php") ?>
  <?php include("./templates/sidebar.php") ?>
  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Assign Date</h1>
    </div><!-- End Page Title -->
   
        <section class="section dashboard">
      
      <?php
        
        require("./conn.php");
            
              $sql = "SELECT * FROM employee";
              $result=mysqli_query($conn,$sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

          // read data of each row
            while($row = $result->fetch_assoc()) {
       
echo' <div class="card mx-5 ">
<div class="card-body p-2 px-5 d-flex justify-content-between">';
  echo ' <span > <input type="text" name="emp" id="emp"class="form-control" value="' .$row["emp_id"] .'"/>' . $row["emp_name"] . '</span>
  <span>
     <input type="date" name="dateofduty" id="dateofduty"class="form-control" />
   </span>
   <span>
   <button type="button" id="btnRegister" name="btnRegister"  class="btn btn-primary" >Assign</button>
   </span>
 </div>
</div>

</section>';


}
?>

      <!-- End #main -->
  <div class="fixed-bottom bg-light">
    <?php include("./templates/footer.php") ?>
  </div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php

  ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="js/bootstrap.js"></script>
  <script src="js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/jquery.slimscroll.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="js/jquery.scrollTo.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>
