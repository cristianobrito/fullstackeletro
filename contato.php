    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>
            Contato - Full Stack Eletro
        </title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="funcoes.js"></script>
    </head>

    <body>
    <!--ola todos a formatação esta em um arquivo css externo
    ====================cristiano brito de oliveira==================================================================-->

    <!----=====================[ INICIO MENU ]======================================================================-->
<!--o menu foi excluido e colocado o php-->
    <?php
    include('menu.html');
    ?>

    <!----=====================[ FIM MENU ]==========================================================================-->

    <!----=====================[ INICIO CABEÇALHO ]==================================================================-->

        <h2>Contato</h2>
        <hr>
    <!----===================[ FIM CABEÇALHO ]=====================================================================-->  


    <!----=====================[ INICIO LOGO REDES SOCIAIS ]==========================================================-->

        <div id="contatoFormatado">

            <tr>
                <td>
                    <img src="./imagens/logoemail.png" width="80px"><br>
                    contato@fullstackeletro.com
                </td>
                <div>
                    <td>
                        <img src="./imagens/whatsapp.png" width="80px"><br>
                        (11) 99999-9999
                    </td>
            </tr>
        </div>
        </div>
    <!----===================[ FIM LOGO REDES SOCIAIS ]================================================================-->



    <!----===================[ INICIO CAMPO DE MENSAGENS ]===============================================================-->

        <div id="mensagenEnviada">           
        <form method="POST" action="./enviandoerecebendo.php">
    
            <input type="text" style="width: 400px" placeholder="Digite seu e-mail" name="emailUsuario">
            <h4>Mensagem:</h4>
            <textarea style="width: 400px;" placeholder="informações duvidas ou sugestões" name="usuarioSugestao"></textarea><br>
            <input type="submit" value="Enviar">
        </form>
        </div> 

    <!----===================[ FIM CAMPO DE MENSAGENS ]====================================================================-->

        <br><br><br>

    <!----===================[ INICIO RODAPÉ ]=============================================================================-->
                    
        <footer id="rodape">
            <p id="formas_pagamento"><b>Formas de pagamento</b></p>
            <img src="./imagens/logo_pagamento.jpg" width="30%">
            <p>&copy; Recod Pro</p>
        </footer>

    <!----===================[ FIM RODAPÉ ]=================================================================================-->
    </body>

    </html>