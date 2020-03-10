<?php
class Tech{
  use Sconto;
    public $scaffale;
    public $genere;

    public function __construct($_scaffale, $_genere){
      $this->scaffale = $_scaffale;
      $this->genere = $_genere;
    }
}
?>
