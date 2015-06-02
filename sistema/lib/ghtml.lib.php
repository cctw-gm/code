<?php
/*------------------------------------------------------------------------------
## Archivo:     ghtml.lib.php
## Clase:       lib
## Descripcion: funciones que obtienen el html. 
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
class ghtml extends principal
{

// ############   Propiedades   ############

  private $query;
  private $resultado;
  var $style;
  public $htmlphat;
  public $html;
  public $DocumentoCss;
  public $DocumentoHtml;

// ############   Operadores   ############

 /*
  * devuelve el nombre del estilo actual en uso
  *
  * ejemplo de uso:
  *   $this -> css = html::gethtmlstyle();
  * lo cual devuelve
  *   "Directorio del estilo"
  *
  * @access public
  *
  */

  public function htmlstyle()
  {
    $database = new db();
    $this->query = 'SELECT directorio,activo FROM stylos WHERE activo ="SI"';
    $this->resultado = $database->get_results( $this->query );
    foreach($this->resultado as $row )
    {
      $this->style= $row['directorio'];
    }
    return $this->style;
  }

 /*
  * devuelve la ruta al documento css
  *
  * ejemplo de uso:
  *   $tis -> DocumentoCss = 'nombre del documento';
  *   $this -> css = html::getcss();
  * lo cual devuelve
  *   "ruta/al/documento"
  *
  * @access public
  *
  */

  public function  getcss() 
  {
    $this->htmlphat = ROOT_PHAT.'estilos/'.self::htmlstyle().'/css/'.$this->DocumentoCss.'.css'; 
    return $this->htmlphat;
  }

// ############   Constructores   ############

 /*
  * devuelve un documento html con sus funciones desarrolladas
  *
  * ejemplo de uso:
  *   $tis -> DocumentoHtml = 'nombre del documento';
  *   $this -> html = html::gethtml();
  * lo cual devuelve
  *   "el codigo html"
  *
  * @access public
  *
  */

  public function gethtml()
  {
    $this->htmlphat = ROOT_PHAT.'estilos/'.self::htmlstyle();
/* en desarrollo
  $paths = array(
    deve llenarse con una entrada de bd
  );
  foreach($paths as $path)
*/
  if(is_readable($this->htmlphat.'/html/'.$this->DocumentoHtml.'.html'))include_once($this->htmlphat.'/html/'.$this->DocumentoHtml.'.html');
/*         en desarrollo
    $this->fopen = fopen($this->htmlphat.'/html/'.$this->DocumentoHtml.'.html','r');
    $this->html = fread($this->fopen, filesize($this->htmlphat.'/html/'.$this->DocumentoHtml.'.html'));
    fclose($this->fopen);
    echo self::printhtmlclass();
*/
  }
}

 ?>
