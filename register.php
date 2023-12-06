<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="register.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />


  <title>Halaman Registrasi</title>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration Form</h3>
              <form method="POST" action="simpan_register.php">

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="username" type="text" id="user" class="form-control form-control-lg" required />
                      <label class="form-label" for="user">Username</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="password" type="password" id="pass" class="form-control form-control-lg" required />
                      <label class="form-label" for="pass">Password</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" id="nama" name="nama_lengkap" required />
                      <label for="nama" class="form-label">Nama Lengkap</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <h6 class="mb-2 pb-1">Gender: </h6>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="laki-laki" required />Pria
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="perempuan" required />Wanita
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-12">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="status" id="sts" value="admin" required />
                      <label class="form-check-label" for="sts">Admin</label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                <button type="register" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="login.php"><button type="button" class="btn btn-info">Kembali</button></a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>