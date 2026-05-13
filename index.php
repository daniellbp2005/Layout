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
    require_once '_icons/icons.php';
    ?>
    <main>
        <section class="banner">
            <div class="esquerda">
                <p>Novidade disponivel</p>
                <h3>Titulo Moderado <span>Maior</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nam tempora animi laudantium! Porro cumque at sint officia eveniet accusantium id ea, cupiditate debitis earum consectetur in blanditiis sequi hic.</p>
                <div class="row">
                    <button>Ver Coleção</button>
                    <button>Saiba Mais</button>
                </div>
            </div>
            <div class="direita">
                <div class="card-section">
                    <div class="cima">
                        <img src="img/album_2014.jpg" alt="">
                    </div>
                    <div class="baixo">
                        <h1>Albúm de 2014</h1>
                        <p>O albúm da copa do mundo de 2014 com todas as figurinhas, em estado impecavél</p>
                        <div class="row-card-banner">
                            <p>R$ 1400.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="cima">
                        <img src="img/pacotes_50_figs.jpg" alt="">
                    </div>
                    <div class="baixo">
                        <h1>Pacote de Figurinhas</h1>
                        <p>50 Pacotes de figurinhas da Coppa do Mundo de 2026</p>
                        <div class="row-card-banner">
                            <p>R$ 220.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="cima">
                        <img src="img/album_2026_figs.jpg" alt="">
                    </div>
                    <div class="baixo">
                        <h1>Albúm Copa do Mundo 2026</h1>
                        <p>Compre seu albúm da Copa do Mundo de 2026, com 10 pacotes inclusos</p>
                        <div class="row-card-banner">
                            <p>R$ 50.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="menu">

            <div class="conteiner-scroll">

                <div class="row-scroll">

                    <div class="linha-setas">
                        <div class="tema">
                            <p>
                                <?= icon('trofeu', 'trofeu', 'currentColor', 'none') ?>
                                Copa do Mundo 2026 <span>— EUA, México, Canadá</span>
                            </p>
                        </div>
                        <div class="setas">
                            <span><a href="">Ver Todos</a></span>
                            <button class="setas" onclick="mover('copa2026',-1)">
                                 <?= icon('setaL', 'seta') ?>
                            </button>

                            <button class="setas" onclick="mover('copa2026',1)">
                                 <?= icon('setaR', 'seta') ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="copa2026">
                <?php 
                foreach($figurinhas as $figurinha){
                    if($figurinha['categoria'] == 'Copa do Mundo 2026'){
                        echo '
                        <div class="card">
                            <div class="cima">
                                <img src="'.$figurinha['capa'].'" alt="">
                            </div>
                            <div class="baixo">
                                <h1>'.$figurinha['nome'].'</h1>
                                <p>'.$figurinha['descricao'].'</p>
                                <div class="row-card">
                                    <p>R$ '.$figurinha['preco'].'</p>
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                        ';  
                    }                  
                }
                ?>    
                </div>
            </div>


            <div class="conteiner-scroll">

                <div class="row-scroll">

                    <div class="linha-setas">
                        <div class="tema">
                            <p>
                                <?= icon('trofeu', 'trofeu', 'currentColor', 'none') ?>
                                Copa do Mundo 2022 <span>— Quatar</span>
                            </p>
                        </div>
                        <div class="setas">
                            <span><a href="">Ver Todos</a></span>
                            <button class="setas" onclick="mover('copa2022',-1)">
                                 <?= icon('setaL', 'seta') ?>
                            </button>

                            <button class="setas" onclick="mover('copa2022',1)">
                                 <?= icon('setaR', 'seta') ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="copa2022">
                <?php 
                foreach($figurinhas as $figurinha){
                    if($figurinha['categoria'] == 'Copa do Mundo 2022'){
                        echo '
                        <div class="card">
                            <div class="cima">
                                <img src="'.$figurinha['capa'].'" alt="">
                            </div>
                            <div class="baixo">
                                <h1>'.$figurinha['nome'].'</h1>
                                <p>'.$figurinha['descricao'].'</p>
                                <div class="row-card">
                                    <p>R$ '.$figurinha['preco'].'</p>
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                        ';  
                    }                  
                }
                ?>    
                </div>
            </div>

            <div class="conteiner-scroll">

                <div class="row-scroll">

                    <div class="linha-setas">
                        <div class="tema">
                            <p>
                                <?= icon('trofeu', 'trofeu', 'currentColor', 'none') ?>
                                Copa do Mundo 2018 <span>— Russia</span>
                            </p>
                        </div>
                        <div class="setas">
                            <span><a href="">Ver Todos</a></span>
                            <button class="setas" onclick="mover('copa2018',-1)">
                                 <?= icon('setaL', 'seta') ?>
                            </button>

                            <button class="setas" onclick="mover('copa2018',1)">
                                 <?= icon('setaR', 'seta') ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="copa2018">
                <?php 
                foreach($figurinhas as $figurinha){
                    if($figurinha['categoria'] == 'Copa do Mundo 2018'){
                        echo '
                        <div class="card">
                            <div class="cima">
                                <img src="'.$figurinha['capa'].'" alt="">
                            </div>
                            <div class="baixo">
                                <h1>'.$figurinha['nome'].'</h1>
                                <p>'.$figurinha['descricao'].'</p>
                                <div class="row-card">
                                    <p>R$ '.$figurinha['preco'].'</p>
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                        ';  
                    }                  
                }
                ?>    
                </div>

                <div class="conteiner-scroll">

                <div class="row-scroll">

                    <div class="linha-setas">
                        <div class="tema">
                            <p>
                                <?= icon('trofeu', 'trofeu', 'currentColor', 'none') ?>
                                Copa do Mundo 2014 <span>— Brasil</span>
                            </p>
                        </div>
                        <div class="setas">
                            <span><a href="">Ver Todos</a></span>
                            <button class="setas" onclick="mover('copa2014',-1)">
                                 <?= icon('setaL', 'seta') ?>
                            </button>

                            <button class="setas" onclick="mover('copa2014',1)">
                                 <?= icon('setaR', 'seta') ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="copa2014">
                <?php 
                foreach($figurinhas as $figurinha){
                    if($figurinha['categoria'] == 'Copa do Mundo 2014'){
                        echo '
                        <div class="card">
                            <div class="cima">
                                <img src="'.$figurinha['capa'].'" alt="">
                            </div>
                            <div class="baixo">
                                <h1>'.$figurinha['nome'].'</h1>
                                <p>'.$figurinha['descricao'].'</p>
                                <div class="row-card">
                                    <p>R$ '.$figurinha['preco'].'</p>
                                    <button>Comprar</button>
                                </div>
                            </div>
                        </div>
                        ';  
                    }                  
                }
                ?>    
                </div>
            </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'partials/footer.php';
    ?>
    <script src="js/script.js"></script>
</body>

</html>