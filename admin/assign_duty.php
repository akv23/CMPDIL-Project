<?php include("auth.php");?>
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

</head>

<body>

<?php include("./templates/header.php") ?>
<?php include("./templates/sidebar.php") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Assign Duty</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      
        <?php
          
            
            $connection = new mysqli("localhost","root","","cmpdi");
      
            if ($connection->connect_error) {
              die("Connection failed: " . $connection->connect_error);
            }
              
			    $sql = "SELECT * FROM employee";
			    $result = $connection->query($sql);

              if (!$result) {
			  	die("Invalid query: " . $connection->error);
			  }

            // read data of each row
			  while($row = $result->fetch_assoc()) {
                
                
                echo '
                  <div class="card mx-5">
                    <div class="card-body p-2 px-5 d-flex justify-content-between">
                      <span>' . $row["emp_name"] . '</span>
                      
                      <span>
                        <input type="date" name="dateofduty" class="form-control" />
                      </span>
                      <span>
                        <button type="submit" name="save_date" class="btn btn-primary">Save Data</button>
                      </span>
                    </div>
                  </div>';
            }
            if(isset($_POST['save_date']))
              {
                
                $duty_day = date('Y-m-d', strtotime($_POST['dateofduty']));

                $query = "INSERT INTO employee (duty_day) VALUES ('$duty_day')";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    $_SESSION['status'] = "Date values Inserted";
                    header("Location: assign_duty.php");
                }
                else
                {
                    $_SESSION['status'] = "Date values Inserting Failed";
                    header("Location: assign_duty.php");
                }
            }

            $connection->close();
            ?>
        
      
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