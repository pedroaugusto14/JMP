<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JM - criar roupas</title>
    <link rel="shortcut icon" href="../midia/img/logo-desenho.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/animacao.css">
    <link rel="stylesheet" href="../estilos/escolher.css">
</head>
<body id="bodi">
    
    <div class="centralizar">
        <header>
            <section class="contem_logotitulo">
                <div class="logo"></div>
                <div class="titulo_titulo"><h1>JM</h1></div>
            </section>
        </header>
        <main>
            <section class="enunciado">
                <div class="titulo">
                    <h1>ESCOLHA O PRODUTO</h1>
                </div>
            </section>
            <section class="escolher_blusa" id="escolher_blusa">
                <div class="produto" onclick="criar_blusa()">
                    <img src="../midia/img/camisa_branca.png" alt="">
                </div>
                <div class="produto" onclick="criar_bone()">
                    <img src="../midia/img/bone_preto.png" alt="">
                </div>
                <div class="produto" onclick="criar_regata()">
                    <img src="../midia/img/regata_preta.png" alt="">
                </div>
                <div class="produto" onclick="criar_moleton()">
                    <img src="../midia/img/moleton_branco.png" alt="">
                </div>
                <div class="produto" onclick="criar_caneca()">
                    <img src="../midia/img/caneca_meio.png" alt="">
                </div>
            </section>
        </main>
    </div>


    <script src="../interacao/voltar.js"></script>
    <script src="../interacao/mandar_criar.js"></script>
</body>
</html>