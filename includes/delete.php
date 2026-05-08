<?php

if (isset($_GET['deletar']) && isset($_GET['id'])) {

    $idFig = (int) $_GET['id'];

    $delete = delete($pdo, 'tb_figurinhas', 'id = ' . $idFig);

    if ($delete) {
        echo 'Musica excluido com sucesso';
    } else {
        echo 'Não foi possível apagar a música';
    }
    header('Location: ' . $_SERVER['PHP_SELF']); // Limpa a URL

}
