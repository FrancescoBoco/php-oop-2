<?php

trait Hanome{
    public $nome;
    
     public function getNome(){
        return $this->nome;
     }
     
     public function setNome($nome){
         $this->nome = $nome;
     }
}