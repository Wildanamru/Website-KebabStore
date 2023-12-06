<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="menu.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <title>Form Tambah Menu</title>
</head>

<body>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">TAMBAH MENU</h3>
              <form method="POST" action="" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" class="form-control" id="menu1" name="nama_menu" required />
                      <label class="form-label" for="menu1">Nama Menu</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <label class="mb-2 pb-1" for="#">Jenis Menu</label>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Makanan" name="jenis_menu" checked required>Kebab
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Minuman" name="jenis_menu" checked required>Burger
                      </label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="harga" class="form-control" id="harga1" required>
                      <label class="form-label" for="harga1">Harga</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                     <label for="gambar">Foto Menu</label>
                     <input type="file" class="form-control-file border" id="gambar" name="gambar">
                    </div><br>
                  </div>

                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                  <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                  <a href="daftar_menu.php"><button type="button" class="btn btn-info" name="reset">Kembali</button></a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  if (isset($_POST['tambah'])) {
    $nama = $_POST['nama_menu'];
    $jenis = $_POST['jenis_menu'];
    $harga = $_POST['harga'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './upload/';

    move_uploaded_file($source, $folder . $nama_file);
    $insert = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$harga', '$nama_file')");

    if ($insert) {
      header("location: daftar_menu.php");
    } else {
      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
  }

  ?>

  </div>
  </div>
  <!-- Akhir Form Registrasi -->




  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>