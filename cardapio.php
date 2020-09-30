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
                        $categoria = $row['categoria']; ?>

                        <div class="category-slider small-12 columns no-padding">
                            <h4><?php echo $categoria; ?></h4>

                            <div class="slider-cardapio">
                                <div class="slider-002 small-12 small-centered columns">
                                    <?php
                                    $sql2 = "SELECT * from pratos WHERE categoria = '$categoria'";
                                    $result2 = $db_connect->query($sql2);
                                    if ($result2->num_rows > 0) {
                                        // Obtém uma linha do resultado como um array associativo.
                                        while ($row2 = $result2->fetch_assoc()) { ?>
                                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                                                <div class="cardapio-item">
                                                    <a href="prato.php?=<?php echo $row2['codigo']; ?>">
                                                        <div class="item-image">
                                                            <img src="img/cardapio/<?php echo $row2['codigo']; ?>.jpg" alt="cogumelos" />
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="title"><?php echo $row2['nome']; ?></div>
                                                        </div>
                                                        <div class="gradient-filter">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

            <?php }
                } else {
                    'Não há pratos';
                }
            }
            ?>
        </div>
    </div>

    <?php include 'footer/footer.php' ?>