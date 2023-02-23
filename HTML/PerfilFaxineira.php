<?php

    namespace siteDomestica\HTML;

    require_once("../PHP/domestica/Conexao.php");
    require_once("../PHP/domestica/Consultar.php");


    use siteDomestica\PHP\domestica\Conexao;
    use siteDomestica\PHP\domestica\Consultar;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
</head>
<body>

    <form method="POST">
        <label >CPF: </label>
        <input type="number" name="tCpf"/>
        <button type="submit">Buscar</button>


        <?php

            if($_POST['tCpf'] != ""){

                $conexao = new Conexao();
                $consul = new Consultar();

                echo $consul->ConsultarMeusDados($conexao, "domestica", $_POST['tCpf']);
                return;
            }//Fim if

            echo "Ops, preencha os campos";

        ?>
    </form>

    <br><br><a href="ConsultarVaga.php"><button>Buscar Vagas</button></a>
    <br><br><a href="EditarInformacoes.php"><button>Editar Informações</button></a>
    <br><br><a href="DeletarDomestica.php"><button>Deletar Meu Perfil</button></a>
    
</body>
</html>