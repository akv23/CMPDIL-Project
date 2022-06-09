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
  <script>
    $(document).ready(function(){
    $("#btnRegister").click(function(){
     
      var name=$("#txtName").val(); 
      var designation=$("#txtDesignation").val();
      var mobile=$("#txtMobile").val(); 
      
      
     $.ajax({
        type:'post',
        url:'insert.php',
        data: {'action':'submit','name':name,'mobile':mobile,'designation':designation},
        success: function(data)
        {	 
        
          alert(data);
          $("#btnRegister").html("submit");
          $("#error_disp_register").html(data); 
          $("#error_disp_register").slideDown("slow");
          $("#error_disp_register").slideUp(8000); 
                  $("#txtName").val(""); 
                  $("#txtMobile").val(""); 
                  $("#txtDesignation").val(""); 
                  $("#txtCid").focus();
          
        }
       
      });
   
   })
  };
   </script>

</head>

<body>

  <?php include("./templates/header.php") ?>
  <?php include("./templates/sidebar.php") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add User</h1>
    </div><!-- End Page Title -->

    <section class="h-100 h-custom gradient-custom-2">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="p-5">
                      <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                      <form action="insert.php" method="post">
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <input type="text" id="form3Examplev2 txtName" placeholder="name" class="form-control form-control-lg" name="name" />
                            </div>
                          </div>
                          
                        </div>

                        <div class="mb-6 pb-4">
                          <label class="form-label" for="form3Examplev3 txtDesignation" name="designation">Designation </label>
                          <select class="select">
                            <option value="1">select</option>
                            <option value="2">HOD</option>
                            <option value="3">GM</option>
                            <option value="4">AM</option>
                            <option value="4">M</option>
                          </select>
                        </div>

                        <!-- <div class="mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" id="form3Examplev4" name="position" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplev4">Position</label>
                          </div>
                        </div> -->

                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                            <div class="form-outline">
                            <label class="form-label" for="form3Examplev5">Mobile No.</label>
                              <input type="text" id="form3Examplev5 txtMobile" name="mobile" class="form-control form-control-lg" />
                              
                            </div>

                          </div>
                          <div class="col-md-6">

                            <!-- <select class="select">
                        <option value="1">Employees</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select> -->

                          </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-light btn-lg" id="btnRegister"data-mdb-ripple-color="dark">submit</button>
                  </div>
                  <!-- <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Street + Nr</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Code +</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div>

                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
</form>
    </section>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>