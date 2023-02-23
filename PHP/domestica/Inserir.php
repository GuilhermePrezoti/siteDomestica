<?php

    namespace siteDomestica\PHP\domestica;


    require_once("Conexao.php");

    use siteDomestica\PHP\domestica\Conexao;

    Class Inserir{

        

        public function insert(
            Conexao $conexao,
            string $cpf, 
            string $nome, 
            string $Nascimento, 
            string $rua,
            string $cidade,
            string $bairro,            
            int $numero,
            int $avaliacao,
            string $senha,
            string $email,
            string $telefone,
            string $interesse1,
            string $interesse2,
            string $interesse3,
            string $interesse4){

                try{

                    $conn = $conexao->conectar();
                    $sql = "insert into domestica (cpf, nome, dataDeNascimento, rua, cidade, bairro , numero, avaliacao, senha, email, telefone, interesse1, interesse2, interesse3, interesse4) values ('$cpf','$nome','$Nascimento','$rua','$cidade','$bairro','$numero','$avaliacao','$senha','$email','$telefone','$interesse1','$interesse2','$interesse3','$interesse4')";
                    $result = mysqli_query($conn,$sql);

                    if($result){
                        return "<br><br>Cadastrado(a) com sucesso!";
                    }else{
                        return "<br><br>Ops, Aconteceu um erro, tente novamente! :(";
                    }//Fim if else

                    mysqli_close($conn);

                }catch(Except $erro){

                    echo $erro;

                }//Fim try catch       
        
        }//Fim da function Inserir

    }//Fim do Inserir

?>