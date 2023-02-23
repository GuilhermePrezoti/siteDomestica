<?php

    namespace siteDomestica\PHP\domestica;
    

    require_once("Conexao.php");
    require_once("Inserir.php");
    require_once("Consultar.php");
    require_once("Atualizar.php");
    require_once("Deletar.php");

    use siteDomestica\PHP\domestica\Conexao;
    use siteDomestica\PHP\domestica\Inserir;
    use siteDomestica\PHP\domestica\Consultar;
    use siteDomestica\PHP\domestica\Atualizar;
    use siteDomestica\PHP\domestica\Deletar;
  

    $conexao = new Conexao();
    $conexao->conectar();

    //$pessoa = new Inserir();
    //echo $pessoa->insert($conexao, '1235', 'Ana', '15/12/2005', 'Vegueiro', 'Centro', 'SBC', 52 , 1, 'abc123', 'anagatinha2001@orkut.com', '99999999');

    //$cons = new Consultar();
    //echo $cons->ConsultarIndividual($conexao, "domestica", "1235");

    //$atu = new Atualizar();
    //echo $atu->update($conexao, "domestica", "numero", "12345", "1235");

    //$exclude = new Deletar();
    //$exclude->excluir($conexao, "domestica", "1235");





?>