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
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/stylePerfilPrestador.css">
</head>
    <body>
        <header id="navegacao">   
            <img id="logo" src="../imagens/iconeSite.png" alt="Icone do Site"> 
            <nav>
                <ul class="navLink">
                    <li><a href="#"><b>Como funciona?</b></a></li>
                    <li><a href="#"><b>Quem Somos?</b></a></li>
                    <li><a href="#"><b>Cadastre-se</b></a></li>
                    <li><a href="PaginaLogin.php"><b>Login</b></a></li>
                </ul>
            </nav>
        </header>
        <h2>Minhas Informações</h2>
        <p>
            Esta é a sua página. Aqui você pode editar alguns campos.
            Por exemplo, telefone e endereço (caso eles tenham mudado)
        </p>
        <div id="formularioPerfil">
            <div id="formularioInterno">

            <?php
                $consul = new Consultar();
                $consul

            ?>
                
                <form method='POST'> 
                    <label for="tNome">Nome</label>
                    <input type="text" id="tNome" name="tNome"  disabled>
    
                    <label for="tData">Data de Nascimento</label>
                    <input type="text" id="tData" name="tData" disabled>
    
                    <label for="tTelefone">Telefone</label>
                    <input type="text" name="tTelefone" id="tTelefone" disabled>
    
                    <label for="tCPF">CPF</label>
                    <input type="text" name="tCPF" id="tCPF" disabled>
    
                    <label for="tRua">Rua</label>
                    <input type="text" name="tRua" id="tRua" disabled>
    
                    <label for="tNumero">Numero</label>
                    <input type="text" name="tNumero" id="tNumero" disabled>
    
                    <label for="tBairro">Bairro</label>
                    <input type="text" name="tBairro" id="tBairro" disabled>
    
                    <label for="tCidade">Cidade</label>
                    <input type="text" name="tCidade" id="tCidade" disabled>
    
                    <br>
                    <input type="submit" value="Atualizar Informações">


                </form>
            </div>
            <div id="opcoesBotoes">   
               <a href="AdicionarBairros.php"><button class="botao">Adicionar Bairros de Interesse</button></a>
               <a href="TelaVagas.php"><button class="botao">Procurar Vagas</button></a>
            </div>
        </div>
    </body>
</html>