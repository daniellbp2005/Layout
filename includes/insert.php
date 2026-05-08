<?php
require_once 'crud.php';

$novaFig = [
    'nome' => $_POST['nome'],
    'descricao' => $_POST['descricao'],
    'preco' => $_POST['preco'],
    'quantidade' => $_POST['qtd'],
    'categoria' => $_POST['categoria'],
    'situacao' => $_POST['situacao'],
    'capa' => ''
];

$idNovaFig = create($pdo, 'tb_figurinhas', $novaFig);

$tipo_permitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg']; //'tipos de arquivos permitidos
if (!in_array($_FILES['arquivo']['type'], $tipo_permitidos)) { //verifica se o tipo do arquivo enviado é permitido, se n for, exibe mensagem de erro e sai do script
    echo "Tipo de arquivo não permitido.";
    exit;
}

$tamanho_maximo = 1 * 1024 * 1024; //1MB  p mandar img maior q 5mb, tem q config o servidor p permitir. wsl, apache
if ($_FILES['arquivo']['size'] > $tamanho_maximo) {
    echo "Arquivo muito grande";
    exit;
}

$extencao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
$novonome = "capa_" . uniqid() . "." . $extencao;

$dir = "uploads/";
$caminho = $dir . "$idNovaFig/";
$file = $caminho . $novonome;
if (!is_dir($caminho)) {
    mkdir($caminho, 0755, true); // cria o diretorio, 0755 é a permissão, true é p criar subdiretorios caso n exista
}

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $file)) {
    $capaUrl = $file;
    update($pdo, 'tb_figurinhas', ['capa' => $capaUrl], "id = $idNovaFig");
    echo "Figurinha inserido com sucesso com o id: $idNovaFig <br><br>";
    echo "<a href='select.php?id=$idNovaFig'>Ver Figurinhas</a>";
} else {
    echo 'Erro ao enviar a imagem.';
}