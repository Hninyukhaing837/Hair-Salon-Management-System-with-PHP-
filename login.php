<?php $url = 'http://localhost/hair_salon'; ?>

<?php
  session_start();
  if (isset($_SESSION['name'])) {
    session_unset();
    session_destroy();
  }

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>EMPLOYEE MANAGEMENT</title>
  <link rel="apple-touch-icon" href="../images/site/apple-touch-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="../images/site/apple-touch-icon.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/fonts/meteocons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/app.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/core/menu/menu-types/vertical-menu.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url ?>/assets/css/pages/timeline.min.css">
</head>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="images/site/logo-small.png" alt="branding logo" style="width: 100px;">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login To Hair Slon</span>
                  </h6>
                  <h4 style="color: red;"></h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <?php 

                      function text_filter($in){
                        $in = trim($in);
                        $in = stripcslashes($in);
                        $in = htmlentities($in, ENT_QUOTES);        
                        return $in;
                      }

                      if(isset($_POST["login"])){
                        if (empty($_POST["uname"]) || empty($_POST["pass"])) {
                          echo "please fill all inputs....";
                        }else{
                          $uname = text_filter($_POST["uname"]);
                          $pass = text_filter($_POST["pass"]);

                          $con = mysqli_connect("localhost","root","","hair_salon");
                          $sql = "SELECT * FROM user WHERE u_uname='$uname'";
                          $query = mysqli_query($con,$sql);
                          if($user = mysqli_fetch_assoc($query)){
                            
                            if (!password_verify($pass,$user["u_password"])) {
                              echo "password wrong";
                            }else{

                              $_SESSION["name"] = $user["u_name"];
                              $_SESSION["uname"] = $user["u_uname"];
                              $_SESSION["password"] = $user["u_password"];
                              $_SESSION["role"] = $user["u_role"];

                              header("location:index.php");

                            }

                          }else{
                            echo "User Name Or Password are wrong.....";
                          }

                        }
                      }

                     ?>
                    <form class="form-horizontal form-simple" method="post">
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg" name="uname" placeholder="User Name"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg"  name="pass" placeholder="Password"
                        required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                      </div>
                      <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">
                        <i class="ft-unlock"></i> Login
                      </button>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
