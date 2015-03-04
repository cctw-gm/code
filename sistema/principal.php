<?php 
/*------------------------------------------------------------------------------
## Archivo:     principal.php
## Clase:       principal
## Descripcion: lkibreria principal, posee los armadores de modulos. 
## Version:     0.8.0
## actualizado: 20-Dic-2014
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

// ############   Definiciones   ############

define('INSTALL', true);
define('DIRECTORIO', '/cctw-gm/');                                              // En caso de que elsistema este en una sub carpeta lo define
define('ROOT_PHAT', $_SERVER['DOCUMENT_ROOT'].DIRECTORIO);                      // Define la ruta raiz del cervidor 
define('SISTEMA_PHAT', $_SERVER['DOCUMENT_ROOT'].DIRECTORIO.'sistema/');        // Define la ruta raiz del sistema
define('HOST_HTTP','http://'.$_SERVER['HTTP_HOST'].DIRECTORIO);                 // Define el nombre del host
define('INDEX', 'portada');                                                     // Define el modulo de la portada
define('MODULO_GENERAL','printtemas');                                          // Define el moduo a llamar para los temas
define('DB_HOST', 'localhost');                                                 // Define el host de la BD
define('DB_USER', 'root');                                                      // Define el usuario de la BD
define('DB_PASS', 'n4u8qibw');                                                  // Define la contraseña de la BD
define('DB_NAME', 'cctw_gm');                                                   // Define la BD
define('SEND_ERRORS_TO', 'you@yourwebsite.com');                                // en caso de error de la DB envia un correo a...
define('DISPLAY_DEBUG', true);                                                  // Muestrar los erroes de DB (solo activar para proyectos en desarrollo)
define('PHAT_LIBRERIAS', 'lib');
define('PHAT_MODULOS', 'mod');

// ############   Buscador de clases   ############

spl_autoload_register(function ($class) {
  $className = strtolower($class);
  $paths = array(
    PHAT_LIBRERIAS,
    PHAT_MODULOS,
  );
  foreach($paths as $path)
  if(is_readable(SISTEMA_PHAT.$path.'/'.$className.'.'.$path.'.php'))require_once(SISTEMA_PHAT.$path.'/'.$className.'.'.$path.'.php');
}); 

class principal extends basic_func
{

// ############   Propiedades   ############

  public $seccion;

// ############   Constructores   ############

  function __construct() 
  {
    $this->Capturar_cadena = "seccion";
    if (isset( $_REQUEST['seccion'])) $this->seccion = strtolower(basic_func::Capturar());
    else $this->seccion = INDEX;                                                
    if(class_exists($this->seccion)) $print =  new $this->seccion();
    else { 
      $this->general = MODULO_GENERAL; 
      $print = new $this->general();
    }
  }
} 
 ?>
