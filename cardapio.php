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
    <div class="cardapio-list small-11 large-12 columns no-padding small-centered">

        <div class="global-page-container">
            <div class="cardapio-title small-12 columns no-padding">
                <h3>Cardapio</h3>
                <hr>
                </hr>
            </div>
            <!-- Consultando a base de dados para saber quais categorias existem. -->
            <?php

            $server = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = 'restaurante';
            $port = '3306';

            $db_connect = new mysqli($server, $user, $password, $db_name, $port);
            // Este comando é para inserir os dados com os acentos corretamente.
            mysqli_set_charset($db_connect, "utf8");

            if ($db_connect->connect_error) {
                echo 'Falha: ' . $db_connect->connect_error;
            } else {
                // echo 'Conexão feita com sucesso' . '<br><br>';

                // SELECT DISTINCT não repete informações, quando aparecer uma categoria que já apareceu ele não vai incluir no resultado.
                $sql = "SELECT DISTINCT categoria from pratos";
                $result = $db_connect->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $categoria = $row['categoria'];
                        echo $categoria;
                        echo '<br>';
                    }
                } else {
                    'Não há pratos';
                }
            }
            ?>

            <div class="category-slider small-12 columns no-padding">
                <h4>Entradas</h4>

                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">


                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="camarao-alho.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/jardim-cogumelos.jpg" alt="cogumelos" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Jardim de cogumelos</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="camarao-alho.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/camarao-alho.jpg" alt="camaroes" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Camarões ao alho</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="camarao-alho.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/salada-grega.jpg" alt="salada" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Salada Grega</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="camarao-alho.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/brie-geleia.jpg" alt="brie" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Tapas de quejo Brie e Geléia</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-slider small-12 columns no-padding">
                <h4>Pratos Principais</h4>

                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="picanha-brasileira.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/picanha-brasileira.jpg" alt="picanha" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Picanha à Brasileira</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="picanha-brasileira.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/costelinha.jpg" alt="costela" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Costelinha de Porco</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="picanha-brasileira.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/salmao-legumes.jpg" alt="salmao" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Salmão aos Legumes</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="picanha-brasileira.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/churrasco-misto.jpg" alt="churrasco" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Churrasco Misto</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="category-slider small-12 columns no-padding">
                <h4>Sobremesas</h4>

                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="cheesecake-cereja.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/cheesecake-cereja.jpg" alt="cheesecake" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Cheesecake de Cereja</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="cheesecake-cereja.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/flan-frutas-vermelhas.jpg" alt="flan" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Flan de Frutas Vermelhas</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="cheesecake-cereja.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/petit-gateau.jpg" alt="petit-gateau" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Petit Gateau</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="cheesecake-cereja.html">

                                    <div class="item-image">
                                        <img src="img/cardapio/creme-papaya.jpg" alt="papaya" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Creme de Papaya com Cassis</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer/footer.php' ?>