<?php
    namespace Projeto\FaxiLover\Tela;
    require_once("../DAO/Conexao.php");
    use Projeto\FaxiLover\DAO\Conexao;

    $conexao = new Conexao();
    $conn   = $conexao->conectar();
    $sql    = "select * from anuncio";
    $result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagas</title>
    <link rel="stylesheet" href="../css/styleTelaVagas.css">
</head>
    <body>
        <header id="navegacao">   
            <img id="logo" src="../imagens/iconeSite.png" alt="Icone do Site"> 
            <nav>
                <ul class="navLink">
                    <li><a href="#"><b>Como funciona?</b></a></li>
                    <li><a href="#"><b>Quem Somos?</b></a></li>
                    <li><a href="#"><b>Cadastre-se</b></a></li>
                    <li><a href="#"><b>Login</b></a></li>
                </ul>
            </nav>
        </header>
        <div id="filtro">
            <div id="opcoes">
                <h4>Filtre por salário</h4>

                <form>
                    <input type="radio" id="1" name="valor">
                    <label for="1">De 0 a R$ 100,00</label>

                    <input type="radio" id="2" name="valor">
                    <label for="2">De R$ 100,00 a R$ 200,00</label>

                    <input type="radio" id="3" name="valor">
                    <label for="3">De R$ 200,00 a R$ 300,00</label>

                    <input type="radio" id="4" name="valor">
                    <label for="4">De R$ 300,00 a R$ 400,00</label>
                </form>
            </div>
        </div>
        <div class="bloco">
            <?php
                while($dados = mysqli_fetch_Array($result)) {
            ?>
            <div class="card">
                <div class="imagem">
                    <img id="imageComodo" src="<?php echo $dados["imagem"]; ?>" alt="Cozinha">
                </div>
                <div class="info">
                    <h1 class="titulo"><?php echo $dados["titulo"]; ?></h1>
                    <div id="infoDes">
                        <h4>Descrição</h4>
                        <p class="descricao"><?php echo $dados["descricao"]; ?></p>
                    </div>
                    <div id="infoEnd">
                        <h4>Endereço</h4>
                        <div id="infoEndereco">
                            <p class="logradouro"><?php echo $dados["rua"]." N° "; ?></p>
                            <p class="numero"><?php echo $dados["numero"]." - "; ?></p>
                            <p class="bairro"><?php echo $dados["bairro"]." - "; ?></p>
                            <p class="cidade"><?php echo $dados["cidade"]." - "; ?></p>
                        </div>
                    </div>
                    <div id="infoVal">
                        <h4>Valor</h4>
                        <p class="preco"><?php echo "R$ ".$dados["valor"]; ?></p>
                    </div>
                </div>
                <div>
                    <form method="POST">
                        <input type="hidden" name="codigo" value="<?php echo $dados['cod']; ?>">
                        <button type="submit" name="interesse">Tenho Interesse</button>

                        <?php
                            if(isset($_POST['interesse'])){
                                try {
                                    $codigoVaga = $_POST['codigo'];
                                    $sql2    = "insert into candidatura (codigoCandidatura, codigoVaga, nome, telefone) values ('', '$codigoVaga', 'Andressa', '11970707070')";
                                    $result2 = mysqli_query($conn,$sql2);
                                    if($result2){
                                        echo "Resgistrado";
                                    } else {
                                        echo "Não registrado";
                                    }
                                } catch(Except $erro) {
                                    echo $erro;
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>