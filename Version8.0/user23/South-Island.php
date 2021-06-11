<html lang="en">
<!--Version 7.0 
	Name: Joey St. George
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/JS6.ico" />

    <title>South Island</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev JavaScript Practice">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/South Island.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/South Island.js"></script>
    <script src="JS/all.js"></script>

    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->

</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link">Places To Visit</a>
                    <a href="South-Island.php" class="nav-item nav-link active" tabindex="-1">South Island</a>
                    <a href="Paris.php" class="nav-item nav-link" tabindex="-1">Paris</a>
                    <a href="Bora-Bora.php" class="nav-item nav-link" tabindex="-1">Bora Bora</a>
                    <a href="Maui.php" class="nav-item nav-link" tabindex="-1">Maui</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->

    <!--------------------------------Button--------------------------------->
    <button onclick="topFunction()" id="topBtn" title="Go to top">Top of Page</button>
    <script>

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };
    </script>

    <!--------------------------------Content------------------------------------->
    <br>
    <h1>
        <center>South Island, New Zealand</center>
    </h1>
    <br>
    <div>
        <embed width="100%" height="100%" src="https://www.youtube.com/embed/aqHRnT78fDo?autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></embed>

    </div>

    <div id="text2">
        <div>
            <center>
                <h2>Best Places to Stay</h2>
            </center>
            <br>
            <br>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g1088196-d1755925-Reviews-Split_Apple_Retreat-Kaiteriteri_Nelson_Tasman_Region_South_Island.html"
                            target="_blank" rel="noopener noreferrer">1. Split Apple Retreat</a></p>
                </strong>

                <p>With stunning sea views Split Apple Retreat is a quietly sophisticated and luxurious hideaway
                    just minutes away from the stunning Abel Tasman National Park. The property offers every
                    indulgence as well as the promise of exceptionally good health. Gourmet nutritious cuisine,
                    exceptional spa therapies and unparalleled access to pristine wilderness and golden sand
                    beaches.
                </p>
                <img src="images/South Island/Split Apple Retreat.jpeg" alt="Image of the Split Apple Retreat resort" width=80%>
            </center>
        </div>

        <br>
        <br>
        <br>

        <div>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g635990-d1912037-Reviews-The_St_James-Hanmer_Springs_Canterbury_Region_South_Island.html"
                            target="_blank" rel="noopener noreferrer">2. The St James</a></p>
                </strong>
                <p>
                    Premium accommodation in the tranquil alpine village of Hanmer Springs. Qualmark 5 Star Gold rated
                    and winner of the Hospitality NZ 'Best Motel' award 2018. The perfect place for couples to relax and
                    recharge. Located in the centre of the village - park the car and stroll to the restaurants, cafes,
                    shops and thermal pools. Self-contained studios and suites with panoramic alpine views.
                </p>
                <img src="images/South Island/The St James.jpeg" alt="Image of The St James resort" width=80%>
            </center>
        </div>

        <br>
        <br>
        <br>

        <div>
            <center><strong>
                    <p><a href="https://www.tripadvisor.com/Hotel_Review-g255118-d2465589-Reviews-Airport_Palms_Motel-Christchurch_Canterbury_Region_South_Island.html"
                            target="_blank" rel="noopener noreferrer">3. Airport Palms Motel</a></p>
                </strong>
                <p>
                    Welcome to Airport Palms Motel, Christchurch We offer stylish and affordable accommodation for
                    overnight travellers, tourists, families and the discerning corporate traveller, in our four star
                    plus quality motel. Situated in a quiet residential area of Christchurch but still only 5 minutes to
                    the International Airport and a 15-minute drive to the city centre. Guests enjoy superior bedding,
                    great showers and stress-free services with an attention to detail and a notable difference to the
                    rest.
                </p>
                <img src="images/South Island/Airport Palms Motel.jpeg" alt="Image of the Airport Palms Motel" width=80%>
            </center>
        </div>
    </div>
</body>

<!---------------------------------Footer------------------------------------>
<!-- Footer -->
<footer id="footer" class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Content -->
                <a class="weatherwidget-io" href="https://forecast7.com/en/n45d16170d00/gimmerburn/?unit=us"
                    data-label_1="South Island" data-label_2="Weather" data-days="5" data-theme="gray">South Island
                    Weather</a>
                <script>
                    !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
                </script>


            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <a id="links" href="http://shakonet.isd720.com/WebDev/" target="_blank"
                                rel="noopener noreferrer">PROJECTS</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.shakopee.k12.mn.us/" target="_blank"
                                rel="noopener noreferrer">ABOUT
                                US</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.smore.com/z45xm" target="_blank"
                                rel="noopener noreferrer">BLOG</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a id="links" href="https://www.shakopeesabers.com/" target="_blank"
                                rel="noopener noreferrer">AWARDS</a>
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Contact details -->
                <h5 class="font-weight-bold text-uppercase mb-4">Contact Us</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fa fa-home mr-3"></i> 100 17th Ave W, Shakopee, MN 55379
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> 225838@shakopeeschools.org
                        </p>
                    </li>
                    <li>
                        <p>
                            <i class="fa fa-phone mr-3"></i> (952) 496-5152
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                <!-- Social buttons -->
                <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                <!-- Facebook -->
                <a id="links" type="button" class="btn-floating btn-fb">
                    <i class="fa fa-facebook-f fa-3x"></i>
                </a>
                <!-- Twitter -->
                <a id="links" type="button" class="btn-floating btn-tw">
                    <i class="fa fa-twitter fa-3x"></i>
                </a>
                <!-- Google +-->
                <a id="links" ype="button" class="btn-floating btn-gplus">
                    <i class="fa fa-google-plus fa-3x"></i>
                </a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <!--link->
        <a id="links" href="https://mdbootstrap.com/"> </a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>