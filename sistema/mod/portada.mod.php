<?php
class portada
{
  public $head;

  function portada()
  {
    $this-> DocumentoHtml = 'cabecera';
    print ghtml::gethtml() ;
    $this-> DocumentoHtml = 'portada';
    print ghtml::gethtml() ;
    $this-> DocumentoHtml = 'pie';
    print ghtml::gethtml() ;
  }
} 
 ?>
