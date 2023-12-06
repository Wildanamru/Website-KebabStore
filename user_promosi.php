<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Kebab Abadi / Promosi</title>
</head>

<body>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-light mt-auto" style="background-color: #008080;">
            <div class="container">
                <a style="font-family: Cursive; font-size:25px;" class="navbar-brand text-white" href="user.php"><img src="img/logo1.jpeg" class="mr-3 rounded-circle" alt="" width="25" height="25" class="d-inline-block align-text-center">Kebab Abadi</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mt-2" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="user.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center badge-pill badge-warning" href="user_promosi.php">PROMOSI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="menu_user.php">DAFTAR MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="user_cabang.php">DAFTAR CABANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="pesanan_pembeli.php">KONTAK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center " href="login.php">LOGIN ADMIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- Menu -->
    <div class="container">
        <div class="row mt-3">

            <?php

            include('koneksi.php');

            $query = mysqli_query($koneksi, 'SELECT * FROM promo');
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

            ?>

            <?php foreach ($result as $result) : ?>

                <div class="col-md-3 mt-4">
                    <div class="card border-dark">
                        <img src="upload/<?php echo $result['gambar_promo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?php echo $result['nama_promo'] ?></h5>
                            <label class="harga btn btn-success btn-block "><strong>Berlaku hingga : </strong> <?php echo $result['keterangan_promo']; ?></label>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Akhir Menu -->

    <footer>
        <!-- Awal Footer -->
        <hr class="footer">
        <div class="text-center p-3" style="background :#cccccc">Copyright &copy2023 - Kebab Abadi</div>
        <!-- Akhir Footer -->
    </footer>
    <!-- Akhir Menu -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>