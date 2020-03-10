<?php
require_once __DIR__ . '/trait_sconto.php';
require_once __DIR__ . '/../index.php';
class Smartphone extends Tech{
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
$Samsung = new Smartphone("samsung","S10","700");
$Samsung -> genere = 'Telefonia';
$Samsung -> scaffale = '3B';
$Samsung->calcPrezzoScontato(20,700);
var_dump($Samsung);
$Iphone = new Smartphone("apple","x","1000");
$Iphone -> genere = 'Telefonia';
var_dump($Iphone);
?>
