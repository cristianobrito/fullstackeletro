    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>
            Full Stack Eletro
        </title>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>

    <body>
    <!--ola todos a formatação esta em um arquivo css externo
    ====================cristiano brito de oliveira==================================================================-->

    <!---================[ INICIO MENU ]=============================================================================-->
<!--menu extraido pela aula de php ele foi colado em outro arquivo
        <nav class="menu">
            <a class="coluna1" href="index.php"><img class="imagem_ajuste" 
                    src="./imagens/logo_fullstackeletro.jpg"></a>
            <a class="coluna2" href="produtos.php">Produtos</a>
            <a class="coluna3" href="lojas.php">Nossas Lojas</a>
            <a class="coluna4" href="contato.php">Contato</a>
        </nav>
-->
<!--incluindo o arquivo pelo php ele foi colocado em todas as paginas no lugar do menu em html-->
<?php
    include('menu.html');
?>
    <!---================[ FIM MENU ]================================================================================-->



    <!---================[ INICIO APRESENTAÇÃO ]======================================================================-->

        <main>
            <h2>
                Seja bem vindo(a)!
            </h2>
            <p>Aqui em nossa loja,programadores tem desconto nos produtos para sua casa!</p>
        </main>


    <!---================[ FIM APRESENTAÇÃO ]==========================================================================-->         

        <br><br><br><br>
        <br><br><br><br>
        <br><br>

    <!---================[ INICIO RODAPÉ ]==============================================================================-->
                    

        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento</b></p>
            <img src="./imagens/logo_pagamento.jpg" width="30%">
            <p>&copy; Recod Pro</p>
        </footer>

    <!---================[ FIM RODAPÉ]==================================================================================-->

    </html>