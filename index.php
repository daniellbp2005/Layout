<?php
require_once 'includes/crud.php';
require_once 'includes/delete.php';

$categoria_get = isset($_GET['categoria']) ?  trim($_GET['categoria']) : "";
$figurinhas = readAll($pdo, 'tb_figurinhas');
$categorias = array_unique(array_column($figurinhas, 'categoria'));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once 'partials/header.php';
    ?>
    <main>
        <div class="cont-left">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus maxime, repellat nam saepe id debitis quis dolore tenetur unde sequi accusantium nulla fuga beatae obcaecati, recusandae molestiae placeat! Sint, odit?
        </div>
        <div class="cont-centro">
            <div class="categoria">
                <ul>
                    <?php
                    foreach ($categorias as $catName) {
                        echo '
                            <li><a href="index.php?' . $catName . '">' . $catName . '</a></li>
                        ';
                    }
                    ?>
                </ul>
            </div>
            <?php
            foreach ($figurinhas as $figurinha) {
                echo '
                    <div class="card">
                        <div class="cima">
                            <img src="' . $figurinha['capa'] . '" >
                        </div>
                        <div class="baixo">
                            <h3>Titulo</h3>
                            <div class="row">
                                <p>texto texto texto</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>
                ';
            }
            ?>
        </div>
        <div class="cont-right">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quo eos, accusamus et eum vero sequi impedit maxime error cum sit? Eius reiciendis expedita magni quidem vitae molestias rerum voluptatum!


        </div>
    </main>
    <?php
    require_once 'partials/footer.php'
    ?>
</body>

</html>