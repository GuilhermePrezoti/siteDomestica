<?php
    namespace siteDomestica\PHP\domestica;

    require_once('Conexao.php');

    use siteDomestica\PHP\domestica\Conexao;


    class Atualizar{
        public function update(Conexao $conexao, string $nomeTabela, string $campo, 
        string $novoDado, string $cpf){

            try{

                $conn = $conexao->conectar();
                $sql = "update $nomeTabela set $campo = '$novoDado' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

                if($result){
                    echo "<br><br>Atualizado com Sucesso";
                    return;
                }//Fim if
                echo "<br><br>Ops, houve uma falha, tente novamente! :(";

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim da função
    
        
    
    
    
    }//Fim da classe



?>