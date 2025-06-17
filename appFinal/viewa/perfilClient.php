<?php
// Verifica se o formulário foi enviado com uma imagem
$imagemPath = 'padrao.png'; // imagem padrão

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])) {
    $nomeArquivo = $_FILES['foto']['name'];
    $caminhoTemp = $_FILES['foto']['tmp_name'];
    $caminhoFinal = 'uploads/' . $nomeArquivo;

    // Cria a pasta se não existir
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    if (move_uploaded_file($caminhoTemp, $caminhoFinal)) {
        $imagemPath = $caminhoFinal;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Cliente</title>
    <link rel="stylesheet" href="/appFinal/css/perfilClient.css">
</head>
<body>

<div class="top-bar">
    <div class="search-bar">
        <button class="icon-button">☰</button>
        <button class="icon-button">📷</button>
        <input type="text" placeholder="Buscar...">
        <button class="icon-button">🔍</button>
    </div>
    <div>
        <button class="icon-button">👤</button>
        <button class="icon-button">💛</button>
    </div>
</div>

<div class="perfil" style="background-image: url('<?php echo $imagemPath; ?>');">
    <div class="perfil-info">
        <div class="nome">NOME</div>
        <div>e seu endereço...</div>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="foto" id="foto" style="display:none;" onchange="this.form.submit()">
        <button class="upload-btn" type="button" onclick="document.getElementById('foto').click();">☁️</button>
    </form>
</div>

<div class="pedidos">
    <h2>MEUS PEDIDOS:</h2>
    <div class="pedidos-icons">
        <div>
            <div class="icone">🛵</div>
            CAMINHO
        </div>
        <div>
            <div class="icone">💬</div>
            COMENTAR
        </div>
    </div>
</div>

<a href="login.php" class="vendedor-btn">TORNA-SE VENDEDOR 🛍️</a>

</body>
</html>
