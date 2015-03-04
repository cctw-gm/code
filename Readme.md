################### Vocabulario ###################

A continuación se muestra una serie de definiciones y dialecto básico del sistema.
 
1 Operadores:             son un grupo de funciones que procesan información y su respuesta es usada por otras funciones.

2 Constructores:          son un grupo de funciones arman el contenido html a mostrar.

3 Propiedades:            Son las variables de cada librería.

4 Librerías:              son un grupo de funciones agrupadas bajo una clase. pueden estar en cualquier idioma.

5 lib:                    Son un grupo de librerías listas para usar en cualquier momento por los módulos. no deben llevar ninguna
                          clase de código html o similar ni hacer uso de la función _autoload por seguridad( casi siempre son solo
                          operadores).

6 módulos:                es el nombre que se le da a las librerías mod debido a que funcionan como tales. existen 3 tipos de módulos,
                          secciones; componentes y extencion.

7 mod:                    son un grupo de librerías listas para mostrar el contenido de la pagina usando ayuda de las librerías 
                          lib. pueden llevar código html o similar y deben hacer uso de la función _autoload como disparador.

8 módulos de Secciones:   son módulos enfocados a agregar tipos de paginas completas al sistema, tales como: foros, chats, blogs, etc.

9 módulos de Componentes: son módulos enfocados en generar funcionalidades nuevas (menús, chats, etc.) para ser utilizados en nuestros
                          diseños html.   

10 módulos de extencion:  son módulos que extienden o modifican las características de módulos ya existentes, para utilizar estos
                          módulos se debe instanciar al modulo de extencion en vez del original. necesita que se le agregue la palabra 
                          reservada extends (el uso de extends no es necesariamente solo para módulos de extencion.) seguido del  
                          nombre de la clase original después de declarar el nombre de la clase del modulo de extencion 
                          ( class extencion extends Clase_original ) 

