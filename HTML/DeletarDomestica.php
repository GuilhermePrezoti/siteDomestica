<?php
    namespace siteDomestica\HTML;


    require_once("../PHP/domestica/Conexao.php");
    require_once("../PHP/domestica/Deletar.php");


    use siteDomestica\PHP\domestica\Conexao;
    use siteDomestica\PHP\domestica\Deletar;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> :'( </title>
</head>
<body>

    <form method="POST">

    <label >Cpf: </label>
    <input type="text" name="tCpf" id="tCpf">

    <br><br><input type="submit" value="submit">

    <?php

        if($_POST['tCpf'] != ""){

            $conexao = new Conexao();
            $del = new Deletar();


            echo $del->excluir($conexao, 'domestica', $_POST['tCpf']);
            return;

        } //Fim if

        echo "Ops...Houve uma falha, tente novamente :(";



    ?>
    </form>

    <br><br><a href="PerfilFaxineira.php"><button>Ver Meu Perfil</button></a>
    <br><br><a href="ConsultarVaga.php"><button>Buscar Vagas</button></a>

    
</body>
</html>