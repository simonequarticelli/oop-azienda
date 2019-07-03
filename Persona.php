<?php

//creo classe persona
class Persona {

  private $nome;
  private $cognome;
  private $eta;
  private $codice_fiscale;

  //eseguo l'assegnazione dell'età
  function __construct($_eta = '32'){
    $this->eta = $_eta;
  }

  //con la funzione setName imposto il nome
  function setName($nome){
    $this->nome = $nome;
  }

  //con la funzione getName leggo il nome impostato
  function getName(){
   return $this->nome;
  }

}

?>
