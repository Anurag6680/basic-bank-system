<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Basic Banking System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/tsf.png" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .card {
            flex-direction: row;
            align-items: center;
        }

        .card-title {
            font-weight: bold;
        }

        .card img {
            width: 30%;
            border-top-right-radius: 0;
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        @media only screen and (max-width: 768px) {
            a {
                display: none;
            }

            .card-body {
                padding: 0.5em 1.2em;
            }

            .card-body .card-text {
                margin: 0;
            }

            .card img {
                width: 50%;
            }
        }

        @media only screen and (max-width: 1200px) {
            .card img {
                width: 40%;
            }
        }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <a href="index.php" class="navbar-brand">
            <img src="img/tsf.png" height="60" alt="CoolBrand">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">TSF Bank</a>
        </a>
        <div class="container">
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#services">Services</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="masthead-avatar mb-5" src="img/bank.png" alt="" />
            <h1 class="masthead-heading text-uppercase mb-0">Start Banking</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p class="masthead-subheading font-weight-light mb-0"> Welcoming you in the most trusted TSF Bank !</p>
        </div>
    </header>
    <section class="page-section portfolio" id="services">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Services</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <img src="img/transfer.jpg" class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">Transfer Money</h5>
                                <a href="transfermoney.php" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <img src="img/history.jpg" class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">Transaction History</h5>
                                <a href="transactionhistory.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">
                        Our Vision Statement
                        A world of enabled and connected little minds, building future.
                        Our Mission Statement
                        To inspire students, help them innovate and let them integrate to build the next generation
                        humankind.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Inspire: To inspire, motivate and encourage students to learn, create and help build
                        a better society.
                        Innovate: To teach new ways of thinking, to innovate and solve the problems on their own.
                        Integrate: To let the students integrate, and help each other, learn from each other and do well
                        together.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Basic Banking System 2021</small></div>
        <pre style="color:white;">Made by Aman Gupta</pre>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>