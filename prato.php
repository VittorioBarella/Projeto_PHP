''
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

    <div class="product-page small-11 large-12 columns no-padding small-centered">

        <div class="global-page-container">

            <div class="product-section">
                <div class="product-info small-12 large-5 columns no-padding">
                    <h3>Camarão ao Alho</h3>
                    <h4>Entradas</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales
                        justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod
                        efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit
                        sit amet, iaculis porta velit. In vulputate tristique urna. Praesent
                        tempus ipsum augue, sit amet tristique lacus semper cursus.
                    </p>

                    <h5><b>Preço: </b>R$ 14</h5>
                    <h5><b>Calorias: </b>310</h5>
                </div>

                <div class="product-picture small-12 large-7 columns no-padding">
                    <img src="img/cardapio/camarao-alho.jpg" alt="camarao">
                </div>

            </div>

            <div class="go-back small-12 columns no-padding">
                <a href="cardapio.html">
                    << Voltar ao Cardápio</a> </div> </div> </div> <?php include 'footer/footer.php' ?> <script src="js/vendor/jquery.js">

                        </script>
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