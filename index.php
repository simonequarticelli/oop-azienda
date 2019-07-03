<!-- Prendete pure spunto dall'esempio del fattorino
(classe Persona generica e una sottoclasse ad esempio Dipendente che la estende).
Se volete potete pure ampliare l'esercizio considerando anche ad esempio i
collaboratori esterni oppure rendendo più specifico ancora il concetto di dipendente.
Decidete voi le varie proprietà e la loro visibilità, l'importante è che
cerchiate di scrivere codice pulito, estensibile e manutenibile -->

<?php

require_once 'Persona.php';
require_once 'Dipendente.php';

$persona_1 = new Persona();
print_r($persona_1);
echo '<br>';
$persona_1->setName('Simone');
echo 'Nome: ' . $persona_1->getName().'<br>';

$dipendente_1 = new Dipendente();
$dipendente_1->impostaEstampaMansione('Operaio');

//eseguo controllo
try {
  echo 'RAL ' . $persona_1->getName() . ' ' . '€' . $dipendente_1->ral(1200);
//nel caso in cui il parametro inserito non sia un numero allora...
} catch (\Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

?>
