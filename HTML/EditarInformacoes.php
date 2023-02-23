<?php

    namespace siteDomestica\HTML;

    require_once("../PHP/domestica/Conexao.php");
    require_once("../PHP/domestica/Atualizar.php");

    use siteDomestica\PHP\domestica\Conexao;
    use siteDomestica\PHP\domestica\Atualizar;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informações</title>
</head>
<body>

    <form method="POST">

    <br><label >CPF: </label>
    <br><input type="text" name="tCpf" required>

    <label >Escolha o tipo de informação que deseja atualizar!</label>
    <br><select name="tCampo" id="tCampo" >
        <option value="rua">Rua</option>
        <option value="bairro">Bairro</option>
        <option value="cidade">Cidade</option>
        <option value="numero">Numero</option>
        <option value="senha">Senha</option>
        <option value="email">Email</option>
        <option value="telefone">Telefone</option>
    </select>


    <br><label >Digite a nova informação</label>
    <br><input type="text" name="tNovoDado" required>


    <br><button type="submit">Enviar</button>

    <?php

        if($_POST['tNovoDado'] != "" && $_POST['tCampo'] != "" && $_POST['tCpf'] != ""){

            $conexao = new Conexao();
            $atu = new Atualizar();


            echo $atu->update($conexao, "domestica", $_POST['tCampo'], $_POST['tNovoDado'], $_POST['tCpf']);
            return;


        }//Fim if

        echo "Ops...Houve uma falha ao atualizar";
    ?>
    </form>

    <br><br><a href="PerfilFaxineira.php"><button>Ver Meu Perfil</button></a>
    <br><br><a href="ConsultarVaga.php"><button>Buscar Vagas</button></a>
    
    
    
</body>
</html>