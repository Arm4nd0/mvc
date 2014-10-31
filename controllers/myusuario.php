<?php
    $usuario = new Usuario();
    //asignacion de valores de manera directa sin en cambio se puede hacer consultas a las bases de datos del sistema en lugar de asignar valores directamnete
    $titulo = 'Bienvenidos al MyUser';
    $contenido = 'Contenido de la variable....';
    //asignacion de un valor atravez de un metodo
    $variables = array('titulo'=>$titulo, 'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());
    view('myusuario',$variables);
?>