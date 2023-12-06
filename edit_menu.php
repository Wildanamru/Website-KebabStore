<?php
include('koneksi.php');

$id_menu = $_GET['id_menu'];

$ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_menu='$id_menu'");
$result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

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

  <title>Form Edit Menu</title>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">EDIT MENU</h3>
              <form method="POST" action="edit.php" enctype="multipart/form-data">
                <div class="form-group mt-3">
                  <label for="menu1">Nama Menu</label>
                  <input type="hidden" name="id_menu" value="<?php echo $result[0]['id_menu'] ?>">
                  <input type="text" class="form-control" id="menu1" name="nama_menu" value="<?php echo $result[0]['nama_menu'] ?>">
                </div>
                <div class="form-group mt-3">
                  <label for="#">Jenis Menu</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="jenis_menu" value="Makanan">KEBAB
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="Minuman" name="jenis_menu">BURGER
                    </label>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="harga1">Harga Menu</label>
                  <input type="text" class="form-control" id="harga1" name="harga" value="<?php echo $result[0]['harga'] ?>">
                </div>
                <div class="form-group mt-3">
                  <label for="gambar">Foto Menu</label>
                  <input type="file" class="form-control-file border" id="gambar" name="gambar">
                </div><br>
                <button type="submit" class="btn btn-primary" name="tambah">Edit</button>
                <a href="daftar_menu.php"><button type="button" class="btn btn-danger" name="reset">Kembali</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Form Registrasi -->
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>