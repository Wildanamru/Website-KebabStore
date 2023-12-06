<?php
session_start();
if (!isset($_SESSION['login_admin'])) {
    header("location: login.php");
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        <title>Kebab Abadi (Admin)</title>
    </head>

    <body>

        <header>

            <!-- NAVBAR -->
            <nav class="navbar navbar-light mt-auto" style="background-color: #008080;">
                <div class="container">
                    <a style="font-family: Cursive;font-size:25px;" class="navbar-brand text-white" href="user.php"><img src="img/logo1.jpeg" class="mr-3 rounded-circle" alt="" width="30" height="30" class="d-inline-block align-text-center">Kebab Abadi</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto mt-2">
                            <li class="nav-item">
                                <a class="nav-link text-center badge-pill badge-warning" href="admin.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center " href="daftar_promosi.php">PROMOSI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="daftar_menu.php">DAFTAR MENU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="daftar_cabang.php">DAFTAR CABANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="pesanan_pembeli.php">KONTAK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center " href="logout.php">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Section hero -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bannerr.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <p style="font-size: 20; font-family: helvetica;">Kami Menerima Pesanan & Saran</p>
                        <a class="btn btn-outline-light text-white" href="https://wa.link/ystoe3" target="_blank" role="button">
                            <i class="fab fa-whatsapp "></i>
                        </a>
                        <a class="btn btn-outline-light text-white mt-2" href="https://instagram.com/kebab_abadi?igshid=YmMyMTA2M2Y=" target="_blank" role="button">
                            <i class="fab fa-instagram "></i>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <p style="font-size: 20; font-family: helvetica;">Kami Menerima Pesanan & Saran</p>
                        <a class="btn btn-outline-light text-white" href="https://wa.link/ystoe3" target="_blank" role="button">
                            <i class="fab fa-whatsapp "></i>
                        </a>
                        <a class="btn btn-outline-light text-white mt-2" href="https://instagram.com/kebab_abadi?igshid=YmMyMTA2M2Y=" target="_blank" role="button">
                            <i class="fab fa-instagram "></i>
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    <!-- AKHIR SECTION HERO -->

    </header>
        <main>
        <div class="bg-dark text-white card-header text-center mt-0">
            ADMIN
          </div>
            <div class="container mt-3">
                <div class="card bg-dark text-white border-light text-center">
                    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <a href="daftar_promosi.php" class="btn" style="background-color: #008080; color: white;">PROMO TERBARU</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="judul text-center mt-5">
                    <h3 class="font-weight-bold">KEBAB ABADI</h3>
                    <h5>Jawa Timur, Kota Pasuruan & Sekitarnya
                        <br>Buka Jam <strong>16:00 - 22:00</strong>
                    </h5>
                </div>
            </div>

            <div class="container">
                <div class="row mb-5 mt-5">
                    <div class="justify-content-end">
                        <div class="card bg-dark text-white border-light">
                            <img src="img/1a.jpg" class="card-img" alt="Lihat Daftar Menu">
                            <div class="text-center  mb-3 mt-3">
                                <a href="daftar_menu.php" class="btn" style="background-color: #008080; color: white;">LIHAT DAFTAR MENU</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5 mt-5">
                    <div class="justify-content-end">
                        <div class="card bg-dark text-white border-light">
                            <img src="img/1b.jpg" class="card-img" alt="Lihat Daftar Menu">
                            <div class="text-center  mb-3 mt-3">
                                <a href="daftar_cabang.php" class="btn" style="background-color: #008080; color: white;">LIHAT DAFTAR CABANG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

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

    </body>

    </html>
<?php } ?>