<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="promo.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

  <title>Form Tambah Promosi</title>
</head>

<body>
    <!-- FORM TAMBAH PROMOSI -->
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
                      <input type="text" class="form-control" id="np" name="nama_promo" required />
                      <label class="form-label" for="np">Nama Promo</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="keterangan_promo" class="form-control" id="ket" required>
                      <label class="form-label" for="ket">Waktu Tenggat</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                    <div class="form-outline datepicker w-100">
                     <label for="gambar">Foto Promo</label>
                     <input type="file" class="form-control-file border" id="gambar" name="gambar">
                    </div><br>
                  </div>

                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                  <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                  <a href="daftar_promosi.php"><button type="button" class="btn btn-info" name="reset">Kembali</button></a>
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
        $namapromo = $_POST['nama_promo'];
        $keterangan = $_POST['keterangan_promo'];
        $nama_filee = $_FILES['gambar']['name'];
        $sourcee = $_FILES['gambar']['tmp_name'];
        $foldere = './upload/';

        move_uploaded_file($sourcee, $foldere . $nama_filee);
        $insertt = mysqli_query($koneksi, "INSERT INTO promo VALUES (NULL, '$namapromo', '$keterangan', '$nama_filee')");

        if ($insertt) {
          header("location: daftar_promosi.php");
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