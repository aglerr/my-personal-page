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

    <!-- Rubik Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <section id="portfolio-details" class="portfolio-details section-bg">
        <div class="container">

            <div class="section-title">
                <h2><a href="/">Home</a> / <a href="/portfolio">Portfolio</a> / Player Cosmetics</h2>
            </div>

            <div class="row">

                <div class="col-sm-6 col-lg-4 mb-3" style="width: 750px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="false">
                        {{-- <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div> --}}
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="width: 750px; height: 375px;">
                                <iframe class="d-block w-100" width="750" height="375"
                                    src="https://www.youtube.com/embed/1xCSoe8Nbis?controls=1"
                                    title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item" style="width: 750px; height: 375px;">
                                <iframe class="d-block w-100" width="750" height="375"
                                    src="https://www.youtube.com/embed/-L7ep8XuofQ?controls=1"
                                    title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item" style="width: 750px; height: 375px;">
                                <iframe class="d-block w-100" width="750" height="375"
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
    </section>

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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
