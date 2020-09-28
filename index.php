<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restô Bar</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Permanent+Marker|Raleway:400,700" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>

    <?php include 'header/header.php'; ?>
    <div class="welcome-gallery small-12 columns">
        <div class="photo-section small-12 columns">
            <img class="homepage-main-photo" src="img/main-photo.jpg" alt="slider imagem 1">
        </div>

        <div class="main-section-title small-10 columns">
            <div class="table">
                <div class="table-cell">
                    <h1>Bem vindo ao Restô Bar</h1>
                    <h2>A cozinha tradicional na Brasa</h2>

                </div>
            </div>

        </div>

        <div class="photo-gradient">

        </div>

    </div>




    <div class="about-us small-11 large-12 columns no-padding small-centered">

        <div class="global-page-container">
            <div id="about-us" class="about-us-title small-12 columns no-padding">
                <h3>Sobre Nós</h3>
                <hr>
                </hr>
            </div>


            <img src="img/fachada.jpg" alt="fachada do restaurante">


            <div class="about-us-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo mi,
                    condimentum ac convallis non, porta ac nibh. Morbi volutpat nibh lectus, quis
                    convallis nunc rutrum vitae. Aenean volutpat aliquam elementum. Nunc consequat
                    elit odio, vitae suscipit nunc pretium eu. Aenean vitae lacus auctor, condimentum
                    ipsum at, suscipit erat. Donec dapibus ullamcorper bibendum. Vestibulum posuere
                    augue in lectus dictum tincidunt. Pellentesque ornare eget enim sed dignissim.
                    Sed nec nisi suscipit, feugiat risus ac, lacinia elit.
                </p>

                <p>
                    Duis fermentum leo enim, eget dignissim dolor imperdiet at. Sed ut rutrum lacus.
                    Aenean eleifend, urna eu dapibus imperdiet, turpis diam tristique mauris, nec
                    luctus ante massa eu arcu. Duis tempor risus quis tellus posuere eleifend.
                    Donec fringilla nulla ac odio sagittis tincidunt. Phasellus tempus id felis et
                    finibus. Aenean felis ligula, varius nec varius at, feugiat nec felis. Morbi
                    blandit sapien vel justo consequat laoreet.</p>
            </div>

        </div>

    </div>

    <div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">

        <div class="global-page-container">
            <div class="contact-us-title small-12 columns no-padding">
                <h3>Faça a sua reserva</h3>
                <hr>
                </hr>
            </div>


            <div class="reservation-form small-12 columns no-padding">

                <form>

                    <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">

                        <input type="text" name="nome" class="field" placeholder="Nome completo" />

                        <input type="text" name="email" class="field" placeholder="E-mail" />

                        <textarea type="text" name="mensagem" class="field" placeholder="Mensagem"></textarea>


                    </div>

                    <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
                        <input type="text" name="telefone" class="field" placeholder="Telefone" />

                        <input type="datetime-local" name="data" class="field" placeholder="Data e hora" />

                        <input type="text" name="data" class="field" placeholder="Número de pessoas" />

                        <input type="submit" name="submit" value="Reservar" />

                    </div>


                </form>
            </div>

        </div>
    </div>


    <?php include 'footer/footer.php' ?>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        function initMap() {
            var local = {
                lat: -22.971068,
                lng: -43.186851
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: local,
                styles: [{
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }
                ]

            });
            var marker = new google.maps.Marker({
                position: local,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlo2Bml6zmqP1_xtT3aLybZdWZNP7l8CM&callback=initMap">
    </script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>