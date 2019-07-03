<?php

require_once 'Persona.php';

class Dipendente extends Persona {

  protected $mansione;
  protected $stipendio;

  //con la funzione imposto e stampo la mansione
  function impostaEstampaMansione($mansione){
    $this->mansione = $mansione;
    echo 'Mansione: ' . $this->mansione.'<br>';
  }

  function ral($_stipendio){
    $this->stipendio = $_stipendio;
    if (!is_int($_stipendio)){
      throw new Exception('ATTENZIONE!!! L\'argomento passato alla funzione -->ral<-- non è un numero!');
    }
    return $this->stipendio * 12;
  }

}

?>
