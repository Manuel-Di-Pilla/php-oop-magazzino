<?php
trait Sconto
{
  public $sconto;
  public $prezzoScontato;
  public function calcPrezzoScontato($_sconto,$_prezzo)
  {
    return $this->$prezzoScontato = ($_prezzo *$_sconto)/100;
  }
}

?>
