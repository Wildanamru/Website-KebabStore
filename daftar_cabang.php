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
        <style type="text/css">
        h5 {
            color: #cccccc;
        }

        p {
            color: #cccccc;
        }
    </style>

        <title> Daftar cabang (Admin)</title>
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
                                <a class="nav-link text-center " href="admin.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center " href="daftar_promosi.php">PROMOSI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="daftar_menu.php">DAFTAR MENU</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center badge-pill badge-warning" href="daftar_cabang.php">DAFTAR CABANG</a>
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

        </header>
        
        <main>
            <div class="container mt-5">
                <div class="card-deck">

                 <!-- Card 1 -->
                    <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <a href="https://goo.gl/maps/UzS2LmpwFoSHuXsf6" target="_blank"><img src="img/maps2.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href="https://goo.gl/maps/UzS2LmpwFoSHuXsf6" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 1</h5>
                            <p class="card-text">Jl. KH. Abdul Hamid No.56, Kebonsari, Kec. Purworejo, Kota Pasuruan, Jawa Timur 67131</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://goo.gl/maps/UzS2LmpwFoSHuXsf6" target="_blank" class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
                        </div>
                    </div>

                 <!-- Card 2 -->
                    <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <a href="https://goo.gl/maps/bTZXSLYb2NSLx1iN7" target="_blank"><img src="img/maps1.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href="https://goo.gl/maps/bTZXSLYb2NSLx1iN7" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 2</h5>
                            <p class="card-text">Jl. Dokter Wahidin Sudiro Husodo, Petamanan, Kec. Bugul Kidul, Kota Pasuruan, Jawa Timur 67126 </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://goo.gl/maps/bTZXSLYb2NSLx1iN7" target="_blank" class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
                        </div>
                    </div>

                 <!-- Card 3 -->
                 <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <a href="https://goo.gl/maps/6VXQ5vVt47389cxc9" target="_blank"><img src="img/maps1.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href="https://goo.gl/maps/6VXQ5vVt47389cxc9" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 3</h5>
                            <p class="card-text">Jl. Hasanudin, Purworejo, Kec. Purworejo, Kota Pasuruan, Jawa Timur 67131</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://goo.gl/maps/6VXQ5vVt47389cxc9" target="_blank" class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="card-deck">
                
                <!-- Card 4 -->
                    <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <a href="https://goo.gl/maps/6xCCPL6T87Lf12iy9" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                <a href="https://goo.gl/maps/6xCCPL6T87Lf12iy9" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 4</h5>
                            <p class="card-text">Jl. Sulawesi No.24, Trajeng, Kec. Gadingrejo, Kota Pasuruan, Jawa Timur 67132</p>
                        </div>
                        <div class="card-footer">
                        <a href="https://goo.gl/maps/6xCCPL6T87Lf12iy9" target="_blank" class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
                        </div>
                    </div>

                <!-- Card 5 -->
                <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                <a href="https://goo.gl/maps/uVfgGzzhjtyfjr6g7" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                <a href="https://goo.gl/maps/uVfgGzzhjtyfjr6g7" target="_blank"><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 5</h5>
                            <p class="card-text">Tembokrejo, Kec. Purworejo, Kota Pasuruan, Jawa Timur 67118</p>
                        </div>
                        <div class="card-footer">
                        <a href="https://goo.gl/maps/uVfgGzzhjtyfjr6g7" target="_blank" class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
                        </div>
                    </div>

                <!-- CARD 6 -->
                    <div class="card bg-dark">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                <a ><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                <a><img src="img/banner.jpg" class="d-block w-100 card-img-top" alt="..."></a>
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
                        <div class="card-body">
                            <h5 class="card-title">Cabang 6</h5>
                            <p class="card-text">...</p>
                        </div>
                        <div class="card-footer">
                        <a class="btn" style="background-color: #008080; color: white;">LIHAT MAPS</a>
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
