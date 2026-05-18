<?php
require_once '_icons/icons.php';
$paginaAtual = basename($_SERVER['PHP_SELF']);

function paginaAtiva($arquivo){
    global $paginaAtual; // usa a virável global $paginaAtual
    return ($paginaAtual == $arquivo) ? 'active' : ''; // c a pagina atual for igual ao arquivo, retorna 'active', caso contrário retorna uma string vazia
}
?>
<header>
    <nav>
        <ul>
            <p class="titulo">WebPage</p>
            <li><a href="index.php" class="<?php echo ($paginaAtual == 'index.php') ? 'active' : "" ?>">Produtos</a></li>
            <li><a href="">Promoções</a></li>
            <li><a href="">Formulário</a></li>
            <li><a href="">Login</a></li>
        </ul>
        <ul>
            <li><a href=""><button class="btn">Nova Figurinha +</button></a></li>
            <li>
                <div class="dropdown-icon">
                    <a><?= icon('sino', 'sino') ?></a>
                    <div class="menu-perfil-drop">
                        <ul>
                            <li>Sem notificações</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button><img src="/Layout/img/igorCinza.png" alt="" class="perfil"></button>
                    <div class="menu-perfil-drop">
                        <ul>
                            <li>Ver Perfil</li>
                            <li>Foto de Perfil</li>
                            <li>Ativar Modo Claro</li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>

<div class="tab-bar">
    <a href="/produtos" class="tab-item <?= paginaAtiva('index.php') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/>
        </svg>
        <span>Produtos</span>
    </a>
    <a href="/promocoes" class="tab-item <?= paginaAtiva('promocoes') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
        </svg>
        <span>Promoções</span>
    </a>
    <a href="/formulario" class="tab-item <?= paginaAtiva('formulario') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
        </svg>
        <span>Formulário</span>
    </a>
    <a href="/login" class="tab-item <?= paginaAtiva('login') ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
        </svg>
        <span>Login</span>
    </a>
</div>