<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Roupas</title>
    <link rel="stylesheet" href="/appFinal/css/style.css">
</head>
<body>
    <header class="topo">
        <div class="menu-superior">
            <div class="icones">
                <button>🛒</button>
                <button>📷</button>
                
            </div>
            <input type="text" placeholder="Buscar...">
            <button>🔍</button>
            <button>💜</button>
             <a href="viewa/perfilClient.php"><button>👤 </a></button>
        </div>
        <nav class="menu-categorias">
            <a href="vestidos.php">VESTIDOS</a>
            <a href="camisas.php">CAMISAS</a>
            <a href="calcas.php">CALÇAS</a>
            <a href="moletons.php">MOLETONS</a>
            <a href="lingerie.php">LINGERIE</a>
            <a href="sapatos.php">SAPATOS</a>
        </nav>
    </header>

    <main class="conteudo">
        <section class="imagens-produtos">
            <img src="img1.jpg" alt="Imagem 1">
            <img src="img2.jpg" alt="Imagem 2">
            <div class="imagem-central">
                <img src="img3.jpg" alt="Imagem Central">
                <a href="#"><button>VER ></button></a>
            </div>
            <img src="img4.jpg" alt="Imagem 4">
        </section>

        <div class="buscar-lojas">
            <input type="text" placeholder="EM QUAL ENDEREÇO VOCÊ ESTÁ...">
            <button>🔍</button>
            <button onclick="location.href='lojas_proximas.php'">VER LOJAS PRÓXIMAS</button>
        </div>
    </main>
</body>
</html>
