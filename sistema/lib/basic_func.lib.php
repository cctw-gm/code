<?php
/*------------------------------------------------------------------------------
## Archivo:     basic_func.lib.php
## Clase:       lib
## Descripcion: grupo de funciones basicas de uso comun y publico. 
## Version:     0.1.4
## actualizado: 3-Mar-2015
## Autor:       cctw-gm team
## Pagina:      https://github.com/cctw-gm/CCTW-GM 
##------------------------------------------------------------------------------
## COPYRIGHT (c) 2014 - 2015 cctw-gm
##
## The source code included in this package is free software; you can
## redistribute it and/or modify it under the terms of the GNU General Public
## License as published by the Free Software Foundation. This license can be
## read at:
##
## http://www.opensource.org/licenses/gpl-license.php
##
##------------------------------------------------------------------------------ 
##
## NO MODIFICAR O ALTERAR SI NO SABES QUE ESTAS HACIENDO.
##
##------------------------------------------------------------------------------ */
class basic_func 
{
// ############   Propiedades   ############

  public  $Capturar_cadena;
  private $resultado;

// ############   Operadores   ############

 /* 
  * obsoleta
  * 
  */
  function FormaUrl($cadena2,$cadena){
    if($this->cadena2 =='entrante'){
      return (str_replace('_', ' ', selft::Limpiar($this->cadena)));
    }else if($this->cadena2 =='saliente'){
      $con_acento = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
      $sin_acento = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
      $cadena= strtr($this->cadena, $con_acento, $sin_acento);
      return (str_replace(' ', '_', $cadena));
    }
  }
// ############   Constructores   ############

 /*
  * captura y limpia variaiables tipo get y post
  *
  * ejemplo de uso:
  *   $this->Capturar_cadena = "nombre del get o post";
  *   $this->Capturar = basic_func::Capturar();
  * lo cual devuelve
  *   "la cadena dentro del get o post"
  *
  * @access public
  *
  */

  public function Capturar(){
    if (isset($_REQUEST[$this->Capturar_cadena])) $this->resultado = preg_replace('/[^A-Za-z0-9_-ñÑ]/', '', $_REQUEST[$this->Capturar_cadena]);
    else die("Capturar_cadena = '{$this->Capturar_cadena}'; no encontrado por basic_func::Capturar()");
    return $this->resultado;
  }

 /*
  * devuelve el titulo de la pagina aptual
  *
  * ejemplo de uso:
  *   print basic_func::GetTitle();
  * lo cual devuelve
  *   "titulo de la pagina"
  *
  * @access public
  *
  */
  public function GetTitle(){
    $database = new DB();
    $this->query = 'SELECT nombre,activo FROM style WHERE activo ="true"';
    $this->resultado = $database->get_results( $this->query );
  }
}
 ?>
