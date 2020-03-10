<?php
require_once __DIR__ . '/trait_sconto.php';
require_once __DIR__ . '/../index.php';
class Tv extends Tech{
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
$Samsung = new Tv("samsung","x20","700");
$Samsung -> genere = 'Televisori';
var_dump($Samsung);
$Lg = new Tv("lg","snd","1000");
$Lg -> genere = 'Televisori';
var_dump($Lg);
?>
