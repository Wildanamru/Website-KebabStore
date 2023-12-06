<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylee.css">


</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="wrap">
            <div class="img" style="background-image: url(img/banner.jpg);"></div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-2 text-center">LOGIN</h3>
                </div>
              </div>
              <form method="post" action="" class="signin-form">
                <div class="form-group mt-3">
                  <input name="username" type="text" class="form-control" required>
                  <label class="form-control-placeholder" for="username">Username</label>
                </div>
                <div class="form-group">
                  <input name="password" id="password-field" type="password" class="form-control" required>
                  <label class="form-control-placeholder" for="password">Password</label>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                </div>
              </form>
              <p class="text-center">Lupas password / belum punya akun? <a data-toggle="tab" href="register.php">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Eksekusi Form Login -->
  <?php
  if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memilih tabel
    $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
    $hasil = mysqli_fetch_array($cek_data);
    $status = $hasil['status'];
    $login_admin = $hasil['username'];
    $row = mysqli_num_rows($cek_data);

    // Pengecekan Kondisi Login Berhasil/Tidak
    if ($row > 0) {
      session_start();
      $_SESSION['login_admin'] = $login_admin;

      if ($status == 'admin') {
        header('location: admin.php');
      }
    } else {
      header("location: login.php");
    }
  }
  ?>

  <!-- Akhir Eksekusi Form Login -->

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>