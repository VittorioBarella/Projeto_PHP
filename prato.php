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
            <?php
            $cod_prato = $_GET['prato'];

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
                $sql = "SELECT * from pratos WHERE codigo = '$cod_prato'";
                $result = $db_connect->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $prato_nome = $row['nome'];
                        $prato_categoria = $row['categoria'];
                        $prato_descr = $row['descricao'];
                        $prato_preco = $row['preco'];
                        $prato_calorias = $row['calorias'];
                    }
                } else {
                    'Não há destaques';
                }
            }
            ?>

            <?php
            if ($prato_nome != NULL) { ?>

                <div class="product-section">
                    <div class="product-info small-12 large-5 columns no-padding">
                        <h3><?php echo $prato_nome; ?></h3>
                        <h4><?php echo $prato_categoria; ?></h4>
                        <p><?php echo $prato_descr; ?>
                        </p>

                        <h5><b>Preço: </b>R$ <?php echo $prato_preco; ?></h5>
                        <h5><b>Calorias: </b><?php echo $prato_calorias; ?></h5>
                    </div>

                    <div class="product-picture small-12 large-7 columns no-padding">
                        <img src="img/cardapio/<?php echo $cod_prato; ?>.jpg" alt="Foto do prato: <?php echo $prato_nome; ?>">
                    </div>

                </div>

                <div class="go-back small-12 columns no-padding">
                    <a href="cardapio.html">
                        Voltar ao Cardápio</a>
                </div>
        </div>
    <?php } else {
                echo 'Prato não encontrado!' . '<br>';
            } ?>
    </div>
    <?php include 'footer/footer.php' ?>

    <!-- O GET na URL é feito assim: prato.php?prato=nome do prato.php-->