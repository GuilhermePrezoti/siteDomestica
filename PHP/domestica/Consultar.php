<?php

    namespace siteDomestica\PHP\domestica;

    require_once("Conexao.php");

    use siteDomestica\PHP\domestica\Conexao;

    class Consultar{

        public function ConsultarMeusDados(Conexao $conexao, string $nomeDaTabela, string $cpf){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $novaData = $dados['dataDeNascimento'];
                    $ano = substr($novaData, 0, 4);
                    $mes = substr($novaData, 5, 2);
                    $dia = substr($novaData, 8, 2);
                    $dataCorrigida = $dia."/".$mes."/".$ano;

                    if($dados['cpf'] == $cpf){
                        $_POST['tCPF'] = $dados["cpf"];
                        $_POST['tNome'] = $dados["nome"];
                        $_POST['tNascimento'] = $dataCorrigida;
                        $_POST['tRua'] = $dados["rua"];
                        $_POST['tBairro'] = $dados["bairro"];
                        $_POST['tCidade'] = $dados["cidade"];
                        $_POST['tNumero'] = $dados["numero"];
                        $_POST['tEmail'] = $dados["email"];
                        $_POST['tTelefone'] = $dados["telefone"];
                        $_POST['tAvaliacao'] = $dados["avaliacao"];
                        return;
                    }//Fim if
                }//Fim while
            }catch(Except $erro){
                echo $erro;
            }//Fim try catch
        }//Fim Function


        public function consultarVagas(Conexao $conexao){

            try{

                $conn = $conexao->Conectar();
                $sql = "select * from anuncios";
                $result = mysqli_query($conn,$sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $novaData = $dados['dataPublicacao'];
                    $ano = substr($novaData, 0, 4);
                    $mes = substr($novaData, 5, 2);
                    $dia = substr($novaData, 8, 2);
                    $dataCorrigida = $dia."/".$mes."/".$ano;
                    

                    echo "<br><br>Título: ".$dados["titulo"].
                    "<br>Descrição: ".$dados["descricao"].
                    "<br>Valor R$".$dados["valor"].
                    "<br>Cidade: ".$dados["cidade"].
                    "<br>Logradouro: ".$dados["logradouro"].
                    "<br>Bairro: ".$dados["bairro"].
                    "<br>Número: ".$dados["numero"].
                    "<br>Publicado em: ".$dataCorrigida."<br><br>";
                }//Fim while



                mysqli_close($conn);

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim function consultarVagas


        public function logar(Conexao $conexao, string $cpf, string $senha){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from domestica where cpf = '$cpf' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $verificar = mysqli_num_rows($result);

                if($verificar == 0){
                    echo "Ops...Não encontrei, tente novamente";
                    return;
                }else{

                    
                    header("location: PerfilPrestador.php");
                    exit();
                    
                }

            }catch(Except $erro){

                echo $erro;

            }//Fim try catch

        }//Fim function logar

        public function logarCliente(Conexao $conexao, string $cpf, string $senha){

            try{
                $conn = $conexao->Conectar();
                $sql = "select * from cliente where cpf = '$cpf' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $verificar = mysqli_num_rows($result);

                if($verificar == 0){
                    echo "Ops...Não encontrei, tente novamente";
                    return;
                }else{

                    header("location: PerfilCliente.php");
                    exit();
                    
                }

            }catch(Except $erro){

                echo $erro;

            }//Fim try catch

        }//Fim function logar








    }//Fim da classe





?>