<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SMP Swasta IT Al Hijrah Deli Serdang</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-image:url('assets/img/bg.png'); background-size:cover;">
        <!-- Background Video-->

        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-2 px-lg-0" style="width:400px;">
                    <img src="assets/img/logo.png" style="width:400px;margin-top:-120px;margin-bottom:10px;margin-left:-10px;" />
                    <p class="mb-3 text-black">Login Pengguna</p>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <?php
                    if(isset($_SESSION['success'])){
                      if($_SESSION['success']==1){
                        echo "<p>".$_SESSION['message']."</p>";
                      } else {
                        echo "<p>".$_SESSION['message']."</p>";
                      }
                      unset($_SESSION['success']);
                    }
                    ?>
                    <form method="post" action="home/login.php">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter mb-2">
                            <div class="col"><input class="form-control" name="username" type="text" autocomplete="off" placeholder="Username" aria-label="Username" /></div>
                        </div>
                        <div class="row input-group-newsletter mb-2">
                            <div class="col"><input class="form-control" name="password" type="password" autocomplete="off" placeholder="Password" aria-label="Password" /></div>
                        </div>
                        <div class="row input-group-newsletter">
                            <div class="col"><button class="btn btn-primary" id="submitButton" type="submit" style="width:100%;">Login</button></div>
                        </div>

                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->
        <!-- <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
