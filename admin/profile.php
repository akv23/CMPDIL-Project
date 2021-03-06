
<?php session_start(); 
$cid=$_SESSION['email'];
include "./conn.php";
									
$sql="select * from employee";
$smt=mysqli_query($conn,$sql);
$rs=mysqli_fetch_assoc($smt);
?>
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

    <!-- Profile -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <?php include("./templates/header.php") ?>
    <?php include("./templates/sidebar.php") ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>My Profile</h1>
        </div><!-- End Page Title -->

        <section class="content-body body-sign">

            <div class="container emp-profile shadow p-3 mb-5 bg-body">
                <form method="post">
                    <div class="row">
                        <?php 
                                    include "./conn.php";
									
									
                                    $sl=1;
                                    $sql="select * from employee where emp_id ='$cid'";
                                    $smt=mysqli_query($conn,$sql);
                                    while($rs=mysqli_fetch_assoc($smt))
                                    {
                                        echo '<div class="col-md-6">
                                        <div class="profile-head">
                                            <h5>'.$rs['emp_name'].'</h5>';
                                            if($rs['admin']=='yes')echo '<h6>(admin)</h6>';
                                        echo '<h6>'.$rs['designation'].'</h6>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Employee Id</label>
                                                        </div>
                                                        <div class="col-md-6">'.$rs['emp_id'].'</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Name</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>'.$rs['emp_name'].'</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Phone</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>'.$rs['mob_no'].'</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Designation</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>'.$rs['designation'].'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    </div>';
                                    };
                                    ?>

        </section>
                                   
    </main>"<!-- End #main -->
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