<?php
    namespace siteDomestica\PHP\cliente;
    
    require_once('../PHP/domestica/Conexao.php');

    use siteDomestica\PHP\domestica\Conexao;

    class InserirCliente{
        
        public function cadastrar(
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
            string $telefone)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into cliente (cpf, nome, dataDeNascimento, rua, cidade, bairro , numero, avaliacao, senha, email, telefone) values ('$cpf','$nome','$Nascimento','$rua','$cidade','$bairro','$numero','$avaliacao','$senha','$email','$telefone')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Exception $erro){
                echo $erro;
            }//fim do catch

        }//fim do cadastrar
        
    }//fim da classe

?>