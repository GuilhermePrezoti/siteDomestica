<?php
    namespace Projeto\FaxiLover\Tela;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Cadastrar.php");

    use Projeto\FaxiLover\DAO\Conexao;
    use Projeto\FaxiLover\DAO\Cadastrar;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu anuncio!</title>
    <link rel="stylesheet" href="../css/styleTelaCadastrar.css">
</head>
    <body>
        <header id="navegacao">   
            <img id="logo" src="../imagens/iconeSite.png" alt="Icone do Site"> 
            <nav>
                <ul class="navLink">
                    <li><a href="#"><b>Como funciona?</b></a></li>
                    <li><a href="#"><b>Quem Somos?</b></a></li>
                    <li><a href="PaginaCadastrar.html"><b>Cadastre-se</b></a></li>
                    <li><a href="PaginaLogin.html"><b>Login</b></a></li>
                </ul>
            </nav>
        </header>        

        <div id="blocoCadastrar">
            <h3>Crie seu anúncio</h3>         


            <div id="formulario">
                <form method="POST">
                    <label for="tTitulo">Título:</label>
                    <input type="text" id="tTitulo" name="tTitulo" placeholder="Insira o título do seu anuncio aqui." >
    
                    <label for="tDescricao">Descrição:</label>
                    <input type="text" id="tDescricao" name="tDescricao" placeholder="Descreva o serviço que você precisa.">
                     <p>Informe abaixo o seu endereço:<p>
                    <label for="tLogradouro">Logradouro:</label>
                    <input type="text" name="tLogradouro" id="tLogradouro">
    
                    <label for="tNumero">Numero:</label>
                    <input type="text" name="tNumero" id="tNumero">
    
                    <label for="tBairro">Bairro:</label>
                    <input type="text" name="tBairro " id="tBairro">
    
                    <label for="tCidade">Cidade</label>
                    <input type="text" name="tCidade" id="tCidade"> 

                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" placeholder="100.00" required>
        
                    <label for="image">Selecione uma imagem</label>
                    <input type="file" name="image"  accept=".png, .jpg" required>
        
                                           
                    <div class="opcoes">  
                        <button class="botao"> Criar anúncio </button>
                        <button class="botao">Voltar</button>
                         </div>

                        
                        <?php
                        if(isset($_POST['submit'])) {
                            $caminho = "";
                            $conexao = new Conexao();
                            $insert  = new Cadastrar();
        
                            $nome       = $_FILES['image']['name'];
                            $tmp        = $_FILES['image']['tmp_name'];
                            $tamanho    = $_FILES['image']['size'];
                            $errors     = $_FILES['image']['error'];
        
                            $imagemTipo = explode('.', $nome);
                            $imagemTipoNew = strtolower(end($imagemTipo));
        
                            if($errors === 0) {
                                if($tamanho < 4000000) {
                                    $novoNome = uniqid('', true).".".$imagemTipoNew;
                                    $caminho = 'uploads/'.$novoNome;
                                    move_uploaded_file($tmp, $caminho);
                                } else {
                                    echo "Imagem grande demais!";
                                }
                            } else {
                                echo "Houve um erro!";
                            }
                            echo $insert->inserir($conexao, '123456789', $_POST['titulo'], $_POST['descricao'], $_POST['logradouro'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['valor'], $caminho);
                        } 
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>