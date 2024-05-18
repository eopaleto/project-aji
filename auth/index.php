<?php
session_start();
    include 'connect.php';
    if (isset($_POST['submit'])) {
        @$user = mysqli_real_escape_string($conn, $_POST['username']);
        @$pass = mysqli_real_escape_string($conn, $_POST['password']);

        $login = mysqli_query($conn, "SELECT * FROM akun WHERE LOWER(username) = LOWER('$user') AND password = '$pass'");
        $cek = mysqli_num_rows($login);
        $userid = mysqli_fetch_array($login);

        if ($cek == 0) {
            echo '
            <script>
            setTimeout(function() {
                swal({
                    title: "Login Gagal",
                    text: "Username atau Password Anda Salah. Mohon periksa kembali data anda!",
                    icon: "error"
                });
            }, 500);
            </script>
            ';
        } else {
            $level = $userid['level'];

            if ($level == 'Administrator') {
              $_SESSION['level'] = 'Administrator';
              header('location:../dashboard.php');
            } else {
              $_SESSION['level'] = 'Pegawai';
              header('location:../dashboard.php');
            }

            $_SESSION['id'] = $userid['id'];
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon.png" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Login | Portal Biro Umum</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/components.css">

  </head>
  <body>
<div id="app">
  <section class="section">     
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-0 offset-lg-3 col-xl-4 offset-xl-0 col-login"> <!-- Modified this line -->
          <div class="login-brand">
            <img src="../assets/img/icon_remove.png" alt="logo" width="80" class="rounded-circle" style="filter: invert(1);"><br><a class="col-12 text-dark text-bold">GAME</a>
          </div>

          <div class="card card-primary">
            <div class="card-header"><h4>LOGIN</h4></div>

            <div class="card-body">
              <form method="POST" action="" class="needs-validation" novalidate="" autocomplete="off">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input id="username" type="text" class="form-control" minlength="2" name="username" tabindex="1" placeholder="Masukan Username Anda" required autofocus>
                  <div class="invalid-feedback">
                    Mohon isi username anda dengan benar!
                  </div>
                </div>

                <div class="form-group password-container">
                  <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="Masukan Password Anda" required>
                  <span class="show-password-btn" onclick="togglePassword()">
                      <i id="showPasswordIcon" class='bx bxs-hide show-password-icon'></i>
                  </span>
                  <div class="invalid-feedback">
                      Mohon isi password anda!
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block" tabindex="3">
                    Login
                  </button>
                </div>
               
                <div class="text-center">
                <i class="fas fa-arrow-left"></i><a href="../index.php">  Back to Home</a>
                </div>
              </form>
            </div>
          </div>

    <!-- Footer -->
          <div class="simple-footer text-dark ">
          <div class="text-black">Copyright &copy; 2024 All Rights Reserved by
                <img src="../assets/img/icon_remove.png" alt="" height="30px" 
                width="30px"> Game</div>         
          </div>
    <!-- End Footer -->

        </div>
      </div>
    </div>
  </section>
</div>

    
    <style>
      .password-container {
          position: relative;
      }

      .show-password-btn {
          position: absolute;
          right: 15px; 
          top: 50%;
          transform: translateY(25%);
          cursor: pointer;
      }

      .show-password-btn:hover {
      color: #007bff;
      }
    </style>

    <script>
      function togglePassword() {
          var passwordInput = document.getElementById("password");
          var showPasswordIcon = document.getElementById("showPasswordIcon");

          if (passwordInput.type === "password") {
              passwordInput.type = "text";
              showPasswordIcon.classList.remove('bxs-hide');
              showPasswordIcon.classList.add('bx-show');
          } else {
              passwordInput.type = "password";
              showPasswordIcon.classList.remove('bx-show');
              showPasswordIcon.classList.add('bxs-hide');
          }
      }
    </script>

    <!-- General JS Scripts -->
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- Sweet Alert -->
    <script src="../assets/modules/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/js/page/modules-sweetalert.js"></script>
  </body>
</html>