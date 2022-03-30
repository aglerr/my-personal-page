<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Title and Favicon -->
    <title>md &rsaquo; Home Page</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/rvslider.min.css') }}">

    <!-- Rubik Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <div class="portfolio-details">

        <div class="container">
            
            <div class="section-title">
                <h2><a href="/">Home</a> / <a href="/portfolio">Portfolio</a> / Player Cosmetics</h2>
            </div>

            <div class="rvs-container rvs-blue-highlight rvs-youtube-play">
                
                <div class="rvs-item-container">
                    <div class="rvs-item-stage">
                        <div class="rvs-item"
                            style="background-image: url(https://img.youtube.com/vi/1xCSoe8Nbis/maxresdefault.jpg)">
                            <p class="rvs-item-text">Preview #1</p>
                            <a href="https://www.youtube.com/watch?v=1xCSoe8Nbis" class="rvs-play-video"></a>
                        </div>
                        <div class="rvs-item"
                            style="background-image: url(https://img.youtube.com/vi/-L7ep8XuofQ/maxresdefault.jpg)">
                            <p class="rvs-item-text">Preview #2</p>
                            <a href="https://www.youtube.com/watch?v=-L7ep8XuofQ" class="rvs-play-video"></a>
                        </div>
                        <div class="rvs-item"
                            style="background-image: url(https://img.youtube.com/vi/13_NjIFef9c/maxresdefault.jpg)">
                            <p class="rvs-item-text">Preview #3</p>
                            <a href="https://www.youtube.com/watch?v=13_NjIFef9c" class="rvs-play-video"></a>
                        </div>
                    </div>
                </div>

                <div class="rvs-nav-container">
                    <a class="rvs-nav-prev"></a>
                    <div class="rvs-nav-stage">
                        <a class="rvs-nav-item">
                            <span class="rvs-nav-item-thumb"
                                style="background-image: url(https://img.youtube.com/vi/1xCSoe8Nbis/maxresdefault.jpg)"></span>
                            <h4 class="rvs-nav-item-title">Preview #1</h4>
                            <small class="rvs-nav-item-credits">How plugin works</small>
                        </a>
                        <a class="rvs-nav-item">
                            <span class="rvs-nav-item-thumb"
                                style="background-image: url(https://img.youtube.com/vi/-L7ep8XuofQ/maxresdefault.jpg)"></span>
                            <h4 class="rvs-nav-item-title">Preview #2</h4>
                            <small class="rvs-nav-item-credits">Colorable Cosmetics</small>
                        </a>
                        <a class="rvs-nav-item">
                            <span class="rvs-nav-item-thumb"
                                style="background-image: url(https://img.youtube.com/vi/13_NjIFef9c/maxresdefault.jpg)"></span>
                            <h4 class="rvs-nav-item-title">Preview #3</h4>
                            <small class="rvs-nav-item-credits">Wardrobe Feature</small>
                        </a>
                    </div>
                    <a class="rvs-nav-next"></a>
                </div>
            </div>
        </div>
    </div>


    {{-- <section id="portfolio-details" class="portfolio-details section-bg">
        <div class="container">

            <div class="section-title">
                <h2><a href="/">Home</a> / <a href="/portfolio">Portfolio</a> / Player Cosmetics</h2>
            </div>

            <div class="row">

                <div class="col-sm-6 col-lg-4 mb-3" style="width: 750px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="false">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe class="responsive-iframe"
                                    src="https://www.youtube.com/embed/1xCSoe8Nbis?controls=1" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="responsive-iframe d-block w-100"
                                    src="https://www.youtube.com/embed/-L7ep8XuofQ?controls=1"
                                    title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe class="responsive-iframe d-block w-100"
                                    src="https://www.youtube.com/embed/13_NjIFef9c?controls=1"
                                    title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-3">
                    <div class="card mb-3 h-100">
                        <div class="card-body">
                            <h5 class="card-title">Player Cosmetics</h5>
                            <p class="card-text">A minecraft plugin that gives player an ability to wear a
                                cosmetics. This plugin is inspired by a minecraft server called Origin Realms, and this
                                plugin is for sale too on any minecraft plugin marketplace.</p>
                            <a href="https://www.spigotmc.org/resources/95103/" target="_blank"
                                class="btn btn-primary">Purchase the plugin</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Public Premium Plugin</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/rvslider.min.js') }}"></script>

    <script>
        jQuery(function($) {
            $(".rvs-container").rvslider();
        });
    </script>

</body>

</html>
