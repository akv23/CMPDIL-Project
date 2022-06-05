<?php include("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Change Password</title>
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
        <section role="main" class="content-body pb-none">
                        
    <section class="body-sign" style="max-width: 950px;">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                        </div>
                        <h2 class="panel-title">Your Basic Details</h2>

                    </header>

                    <div class="panel-body">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="text-info">Name :</label>
                                <span id="ctl00_ContentPlaceHolder1_lblName" class="text-danger">Name</span>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="text-info">Employee ID :</label>
                                <span id="ctl00_ContentPlaceHolder1_lblReg" class="text-danger">12345678</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="text-info">Designation:</label>
                                <span id="ctl00_ContentPlaceHolder1_lblProg" class="text-danger">designation</span>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div id="ctl00_ContentPlaceHolder1_upd1">
	
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel panel-featured-warning">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    
                                </div>
                                <h2 class="panel-title">Change Password</h2>

                            </header>

                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5 class="text-info">Enter New Password:</h5>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            
                                            <input name="ctl00$ContentPlaceHolder1$txtNewPassword" type="password" id="ctl00_ContentPlaceHolder1_txtNewPassword" required="required" maxlength="12" class="form-control input-sm mb-md" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAYJJREFUOBGVVLuKwkAUPRFRY2GlhRKDVRpBMFgJgRQ2C37HCvmCdOpnuE0qWzvZBf8hTbC2SLAKqQQfTXbumAy6xE0cmMx9nHNm5t4h0nK5/IjjeMVmFwWGJEk+g30uFosfgpfeIRMh2eiLbBokUGjnO/z+feSUHhN5dr1eh6ZpT7C3BHq9HiaTSbZArVYTiWq1ClYs4T/mRDAxyrROp1Pouo71eo0oimBZFo7HIxzHecr9JZP/1hWyBKT5fB5Tgo55uVw4hq5wvV6z8CLGrhgwZyZOkJIJkUcmDGulwpYVrwEF8oZhGOj3+2g2m7xWh8OBi4gT/CcwHo9hmiZ838d2u+WFTvGl5G2nfuY6Go04WZZlqKqK2+0mcCQwyxNpNBpQFAWVSgXD4RCDwUAIlFkXvpmnikhipN0h93w+43Q6YbPZwLZtdDodAS9UA8/z0G63+QMjJhUwHS+7QH1OWoXdbocwDNFqtRAEAfb7PecT5qUAQ1Bt6EejsAnXddNNBZkwv/3KjSrHve9/AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-0">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnChange" value="Change Password" id="ctl00_ContentPlaceHolder1_btnChange" class="btn btn-facebook">

                                        
                                    </div>
                                </div>
                                 <div class="row">
                                    <span id="ctl00_ContentPlaceHolder1_lblMsg" class="text-danger"></span>
                                    </div>
                            </div>
                    </section></div>
                    </div></div></section>
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