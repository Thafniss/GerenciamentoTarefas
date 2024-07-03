<?php
class TarefaDao{
public function insert(Tarefa $tarefa){
    try{
    $sql = "INSERT INTO terefa  (titulo, descricao, prioridade, datavencimento)
    VALUES (:titulo,:descricao,:prioridade,:datavencimento)";
    $con = ConnectionFactory::getConnection()->prepare($sql);
    $con->bindValue(":titulo",$tarefa->titulo);
    $con->bindValue(":descricao",$tarefa->descricao);
    $con->bindValue(":prioridade",$tarefa->prioridade);
    $con->bindValue(":datavencimento",$tarefa->dataVencimento);
    return $con->execute();
    }catch(Exception $ex){
       echo"ERRO: $ex";
    }

}

}
?>