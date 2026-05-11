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
                        <!-- <img src="" alt=""> -->
                    </div>
                    <div class="baixo">
                        <h1>Titulo</h1>
                        <p>pequena descrição produto</p>
                        <div class="row-card">
                            <p>R$ 249.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="cima">
                        <!-- <img src="" alt=""> -->
                    </div>
                    <div class="baixo">
                        <h1>Titulo</h1>
                        <p>pequena descrição produto</p>
                        <div class="row-card">
                            <p>R$ 249.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="cima">
                        <!-- <img src="" alt=""> -->
                    </div>
                    <div class="baixo">
                        <h1>Titulo</h1>
                        <p>pequena descrição produto</p>
                        <div class="row-card">
                            <p>R$ 249.00</p>
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="trofeu">
                                    <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
                                </svg>

                                Copa do Mundo 2022 -- Quatar
                            </p>
                        </div>
                        <div class="setas">
                            <span>Ver Todos</span>
                            <button id="setaL" onclick="mover(-1)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="seta">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>

                            <button id="setaR" onclick="mover(1)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="seta">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="rowScroll">

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="cima">
                            <img src="img/igorCinza.png" alt="">
                        </div>
                        <div class="baixo">
                            <h1>Titulo</h1>
                            <p>pequena descrição produto</p>
                            <div class="row-card">
                                <p>R$ 249.00</p>
                                <button>Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'partials/footer.php'
    ?>
    <script src="js/script.js"></script>
</body>

</html>