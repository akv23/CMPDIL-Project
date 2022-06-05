<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Profile</title>
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

</head>

<body>

    <?php include("./templates/header.php") ?>
    <?php include("./templates/sidebar.php") ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>My Profile</h1>
        </div><!-- End Page Title -->
        <section class="content-body body-sign" style="max-width: 1500px;">
            <div class="row">

                <div class="panel panel-featured panel-featured-success">
                    <div class="panel panel-sign">
                        <div id="ctl00_ContentPlaceHolder1_Pannel1" class="panel-body">
                            <div id="ctl00_ContentPlaceHolder1_UpdPanel1">


                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label" for="inputPlaceholder">Name</label>
                                    <div class="input-group input-group-icon">
                                        <input name="ctl00$ContentPlaceHolder1$txtName" type="text" id="ctl00_ContentPlaceHolder1_txtName" class="form-control" placeholder="Name" required="required" readonly="true" value="Name">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label" for="inputPlaceholder">Designation</label>
                                    <div class="input-group input-group-icon">
                                        <input name="ctl00$ContentPlaceHolder1$txtProgramme" type="text" id="ctl00_ContentPlaceHolder1_txtProgramme" class="form-control disabled" placeholder="Designation" readonly="true" value="Designation">
                                    </div>
                                </div>
                                
                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label" for="inputPlaceholder">Employee ID</label>
                                    <div class="input-group input-group-icon">
                                        <input name="ctl00$ContentPlaceHolder1$txtRegNo" type="text" id="ctl00_ContentPlaceHolder1_txtRegNo" class="form-control" placeholder="Employee ID" readonly="true" value="12345678">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label">Date of Birth</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input name="ctl00$ContentPlaceHolder1$txtDob" type="text" id="ctl00_ContentPlaceHolder1_txtDob" class="form-control" placeholder="DOB" required="required" readonly="true" value="dd/mm/yyyy">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group mb-lg">

                                    <label class="control-label" for="inputPlaceholder">Mobile Number</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" id="ctl00_ContentPlaceHolder1_txtMobile" required="required" placeholder="Mobile Number" class="form-control" readonly="true" value="1234567890">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" id="ctl00_ContentPlaceHolder1_txtEmail" required="required" class="form-control" placeholder="Email" readonly="true" value="Email">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label">Gender</label>
                                    <div class="input-group input-group-icon">
                                        <input name="ctl00$ContentPlaceHolder1$txtGender" type="text" id="ctl00_ContentPlaceHolder1_txtGender" class="form-control" required="required" placeholder="Gender" readonly="true" value="Gender">
                                    </div>
                                </div>

                                <div class="col-md-12 form-group mb-lg">
                                    <label class="control-label" for="inputPlaceholder">Address</label>
                                    <div class="input-group input-group-icon">
                                        <textarea name="ctl00$ContentPlaceHolder1$txtAddress" id="ctl00_ContentPlaceHolder1_txtAddress" class="form-control" data-plugin-textarea-autosize="" required="required" placeholder="Address" readonly="readonly">address</textarea>

                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>

                </div>
            </div>

            </div>

        </section>
    </main><!-- End #main -->
    <div class="fixed-bottom bg-light">
        <?php include("./templates/footer.php") ?>
    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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