<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas - Visão Geral do Estoque</title>
</head>

<body>

<!--MENU DA PÁGINA-->
<?php

include('menu.php')

?>


        <!--TÍTULO DA PÁGINA-->
        <header>
            <h1>Loja de Roupas - Visão Geral do Estoque</h1>
        </header>
        <hr>
        <br>

    
    
    <!--CÓDIGO PHP - VISÃO GERAL DO ESTOQUE-->
    <?php

    include('conexaobanco.php');

    $sql = mysqli_query($conexaobanco, "SELECT * FROM estoque");

        while ($dados = mysqli_fetch_array($sql)) {

            $codigoprod = $dados['codigoprod'];
            $descricao = $dados['descricao'];
            $fornecedor = $dados['fornecedor'];
            $precounitario = $dados['precounitario'];
            $quantentrada = $dados['quantentrada'];
            $quantsaida = $dados['quantsaida'];
            $valorentrada = $dados['valorentrada'];
            $valorsaida = $dados['valorsaida'];


            echo "
            <table border='1'>

            <tr>
            <td>NOME</td>
            <td>$codigoprod</td>
            </tr>

            <tr>
            <td>DESCRIÇÃO</td>
            <td>$descricao</td>
            </tr>

            <tr>
            <td>FORNECEDOR</td>
            <td>$fornecedor</td>
            </tr>

            <tr>
            <td>PREÇO UNITÁRIO</td>
            <td>$precounitario</td>
            </tr>

            <tr>
            <td>ENTRADA NO ESTOQUE (QTD)</td>
            <td>$quantentrada</td>
            </tr>

            <tr>
            <td>SAÍDA DO ESTOQUE (QTD)</td>
            <td>$quantsaida</td>
            </tr>

            <tr>
            <td>ENTRADA NO ESTOQUE (R$)</td>
            <td>$valorentrada</td>
            </tr>

            <tr>
            <td>SAÍDA DO ESTOQUE (R$)</td>
            <td>$valorsaida</td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            </tr>

            </table>
            
            ";
        }

    ?>

            <!--RODAPÉ-->
            <br>
            <hr>
            <footer>
                <p>UC MS Project - Curso Técnico em Informática - SENAC 2022</p>
            </footer>
</body>

</html>