<?php
class portada
{
  public $head;

  function portada()
  {
    $this-> DocumentoHtml = 'prueba';
    print ghtml::gethtml() ;
  }
} 
 ?>
