<?php
require_once __DIR__ . '/trait_sconto.php';
require_once __DIR__ . '/../index.php';
class Lavatrici extends Tech{
  use Sconto;
    public $marca;
    public $modello;
    public $prezzo;
    public $genere;

    public function __construct($_marca, $_modello, $_prezzo){
      $this->marca = $_marca;
      $this->modello = $_modello;
      $this->prezzo = $_prezzo;
    }
}
$Samsung = new Lavatrici("samsung","x20","700");
$Samsung -> genere = 'Lavatrice';
var_dump($Samsung);
$Bosch = new Lavatrici("bosch","snd","1000");
$Bosch -> genere = 'Lavatrice';
var_dump($Bosch);
?>
