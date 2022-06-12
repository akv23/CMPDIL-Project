<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add User</title>
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

      //$("#txtCid").focus();
      setTimeout(function() {
        $("#txtCid").trigger('click');
      }, 10);


      //Admin Login Start.....
      $("#btnRegister").click(function() {

        var designation = $("#txtDesi").val();
        var role = $("#txtRole").val();
        var name = $("#txtName").val();
        var email = $("#txtemail").val();
        var mobile = $("#txtMobile").val();
        var role = $("#txtRole").val();
        var eid = $("#txtId").val();
        var password= $("#txtPass").val();
        var admin = $("#txtAdmin").val();


        $.ajax({
          type: 'post',
          url: 'insert.php',
          data: {
            'action': 'registration',
            'email': email,
            'name': name,
            'mobile': mobile,
            'designation': designation,
            'role': role,
            'password':password,
            'eid': eid,
            'admin': admin,
          },
          success: function(data) {

            alert(data);
            $("#btnRegister").html("ADD");
            $("#error_disp_register").html(data);
            $("#error_disp_register").slideDown("slow");
            $("#error_disp_register").slideUp(8000);
            $("#txtId").val("");
            $("#txtName").val("");
            $("#txtMobile").val("");
            $("#txtDesi").val("");
            $("#txtRole").val("");
            $("#txtAdmin").val("");
            $("#txtPass").val("");
            $("#txtCid").focus();

          }

        });

      });
      //Admin Login End.....
    });
  </script>
</head>

<body>

  <?php include("./templates/header.php") ?>
  <?php include("./templates/sidebar_admin.php") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add User</h1>
    </div><!-- End Page Title -->
    <div class="justify-content-center  emp-profile shadow" style="margin-bottom: 10%;">
      <div>
        <center>
          <div class="d-flex justify-content-center py-4">
            <img src="assets/img/android-chrome.png" alt="CCL logo" width="100" height="100">
            <span class="d-none d-lg-block"></span>
          </div>
          <h2>NEW USER</h2>
        </center>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              Name
              <input class="form-control" placeholder="Enter Name" name="txtName" id="txtName" type="text" />
            </div>
            <div class="form-group">
              Email
              <input class="form-control" placeholder="Enter Email" name="txtemail" id="txtemail" type="email" />
            </div>
            <div class="form-group">
              Mobile Number
              <input class="form-control" placeholder="Enter Mobile" name="txtMobile" id="txtMobile" type="text" />
            </div>
            <div class="form-group">
              DESIGNATION
              <!-- <input class="form-control" placeholder="Enter Designation" name="txtDesi" id="txtDesi" type="text" /> -->
              <select class="form-control" name="txtDesi" id="txtDesi">
                <option value="MT">MT</option>
                <option value="AM">AM</option>
                <option value="DM">DM</option>
                <option value="M">M</option>
                <option value="SM">SM</option>
                <option value="CM">CM</option>
                <option value="GM">GM</option>
                <option value="HOD">HOD</option>
              </select>
            </div>

            <div id="error_disp_register"></div>
            <div class="form-group">
              ROLE
              <input class="form-control" placeholder="Enter Role" name="txtRole" id="txtRole" type="text" />
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              Employee ID
              <input class="form-control" placeholder="Enter Employee ID" name="txtId" id="txtId" type="text" />
            </div>
            <div class="col-6">
            <div class="form-group">
              Password
              <input class="form-control" placeholder="Enter Paasword" name="txtPass" id="txtPass" type="password" />
            </div>
          
             <div class="form-group">
            Allow Admin Control<br>
              <input class="form-control" placeholder="yes or no" name="txtemail" id="txtAdmin" type="text" />
            </div> 
           <!-- <div class="form-group">
              Allow Admin Control<br>
              <div class="mt-2">
                <input class="form-check-input" type="radio" name="radio txtAdmin" id="radio" value="Yes"> Yes
                <!-- <label class="form-check-label" for="flexRadioDefault1"> -->
                <!-- Yes -->
                <!-- </label> -->
                <!-- </div> -->
                <!-- <div class="form-check form-check-inline mt-2"> -->
              <!--  <input class="form-check-input ms-5" type="radio" name="radio" id="radio txtAdmin" value="No" checked> No
                <!-- <label class="form-check-label" for="flexRadioDefault2"> -->
                <!-- No -->
                <!-- </label> -->
              </div>
            </div>
          </div>

        </div>
        <div id="error_disp_register"></div>
        <center class="py-3 d-grid">
          <button type="button" id="btnRegister" class="btn btn-lg btn-primary">ADD</button>
        </center>
      </div>
    </div>
  </main><!-- End #main -->
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




</head>

<body>