<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CINETECH </title>
    <!-- Link del CSS -->
    <link rel="stylesheet" href="assets/css/style1.css">
    <!-- Link JS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Fav icon  -->
    <link rel="shortcut icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="#" class="logo-img">
                <img src="assets/img/logo_CineTech.png" alt="" class="logo-tech">
            </a>
            <!-- Titulo -->
            <a href="index.html" class="logo">
                Cine<span>Tech</span>
            </a>
            <!-- icono de búsqueda -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="search movie">
                <i class="bx bx-search-alt"></i>
            </div>
            <!-- User -->
            <a href="#" class="user">
                <img src="assets/img/user.jpg" alt="" class="user-img">
            </a>
            <!-- NavBar -->
            <div class="navbar">
                <a href="#home" class="nav-link nav-active">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Inicio</span>
                </a>
                <a href="#popular" class="nav-link">
                    <i class="bx bxs-hot"></i>
                    <span class="nav-link-title">Tendencia</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class="bx bx-compass"></i>
                    <span class="nav-link-title">Explorar</span>
                </a>
                <a href="#movies" class="nav-link">
                    <i class="bx bx-tv"></i>
                    <span class="nav-link-title">Películas</span>
                </a>
                <a href="#" class="nav-link">
                    <i class="bx bx-heart"></i>
                    <span class="nav-link-title">Favoritos</span>
                </a>
                <a href="index.php" class="nav-link">
                    <i class='bx bx-log-out'></i>
                    <span class="nav-link-title">Salir</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <!-- Home Image -->
        <img src="assets/img/background_movie.jpg" alt="" class="home-img">
        <div class="home-text">
            <h1 class="home-title">WHO<span > AM</span> I</h1>
            <p>Es un thriller alemán sobre Benjamin Engel, un joven hacker que se une al grupo ciberactivista CLAY en busca de reconocimiento. Sus atrevidos ataques informáticos les ganan notoriedad, pero también los sumergen en un peligroso juego de crimen y persecución.</p>
            <a href="#" class="watch-btn ">
                <i class="bx bx-right-arrow play-movie2"></i>
                <span>Ver tráiler</span>
            </a>
            <div class="video-container2">
                <div class="video-box2">
                    <video id="myvideo2" src="assets/img/Who Am I- Ningún sistema es seguro - Tráiler español.mp4" controls></video>
                    <!-- Close the video -->
                    <i class="bx bx-x close-video2"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- Popular Section Start -->
    <section class="popular container" id="popular">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Películas populares</h2>
            <!-- Swiper Buttons -->
            <div class="swiper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <!-- Content -->
        <div class="popular-content swiper">
            <div class="swiper-wrapper">
                <!-- Movies box 1 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_1.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">The Matrix</h2>
                            <span class="movie-type">Género: Acción, Ciencia ficción, Ciberpunk, Fantasía</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 2 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_2.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Inception</h2>
                            <span class="movie-type">Género: Acción, Ciencia ficción</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 3 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_3.png" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">La Red Social</h2>
                            <span class="movie-type">Género: Ficción, Drama</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 4 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_4.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Blackhat</h2>
                            <span class="movie-type">Género: Acción, Crimen</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 5 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_5.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Juegos de Guerra</h2>
                            <span class="movie-type">Género: Suspenso, Ciencia ficción</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 6 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_6.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Mr. Robot</h2>
                            <span class="movie-type">Género: Suspenso</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 7 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_7.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Snowden</h2>
                            <span class="movie-type">Acción, Suspenso</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movies box 8 -->
                <div class="swiper-slide">
                    <div class="movie-box">
                        <img src="assets/img/popular_movie_8.jpg" alt="" class="movie-box-img">
                        <div class="box-text">
                            <h2 class="movie-title">Hackers</h2>
                            <span class="movie-type">Género: Suspenso, Crimen</span>
                            <a href="#" class="watch-btn play-btn">
                                <i class="bx bx-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Section End -->

    <!-- Movies Section Start -->
    <section class=" movies container" id="movies">
        <!-- Heading -->
        <div class="heading">
            <h2 class="heading-title">Películas</h2>
        </div>
        <!-- Movies Content-->
        <div class="movies-content">
            <!-- Movies box 0 -->
            <div class="movie-box">
                <img src="assets/img/CEnigma/Enigma_Ttitle2.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">El código Enigma</h2>
                    <span class="movie-type">Género: Suspenso</span>
                    <a href="play-page.html" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 1 -->
            <div class="movie-box">
                <img src="assets/img/movie1.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Tron</h2>
                    <span class="movie-type">Género: Ciencia Ficción, Acción</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 2 -->
            <div class="movie-box">
                <img src="assets/img/movie2.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Duro de Matar</h2>
                    <span class="movie-type">Género: Acción, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 3 -->
            <div class="movie-box">
                <img src="assets/img/movie3.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Control total</h2>
                    <span class="movie-type">Género: Acción, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 4 -->
            <div class="movie-box">
                <img src="assets/img/movie4.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Swordfish</h2>
                    <span class="movie-type">Género: Acción, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 5 -->
            <div class="movie-box">
                <img src="assets/img/movie5.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Los fisgones</h2>
                    <span class="movie-type">Género: Comedia, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 6 -->
            <div class="movie-box">
                <img src="assets/img/movie6.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">La red</h2>
                    <span class="movie-type">Género: Acción, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 7 -->
            <div class="movie-box">
                <img src="assets/img/movie7.jpg" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Antitrust</h2>
                    <span class="movie-type">Género: Acción, Suspenso</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
            <!-- Movies box 8 -->
            <div class="movie-box">
                <img src="assets/img/movie8.png" alt="" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title">Vigilante del futuro</h2>
                    <span class="movie-type">Género: Acción, Ciencia ficción</span>
                    <a href="#" class="watch-btn play-btn">
                        <i class="bx bx-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Movies Section End-->
    
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; CineTech Todos los Derechos Reservados</p>
        <p>By: Yulibeth Granada</p>
    </div>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>