<?php

class Tarefa {
    public $id;
    public $titulo;
    public $descricao;
    public $prioridade;
    public $dataVencimento;

    public function __construct($titulo, $descricao, $prioridade, $dataVencimento){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->prioridade = $prioridade;
        $this->dataVencimento = $dataVencimento;
    }

  

    

}


?>
