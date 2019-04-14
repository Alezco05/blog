<?php

function conexion($bd_config)
{
    try {

        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos)
{
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual()
{
    return isset($_GET['p']) ? (int) $_GET['p'] : 1;
}

function obtener_post($post_por_paginas, $conexion)
{
    $inicio    = (pagina_actual()) > 1 ? pagina_actual() * $post_por_paginas - $post_por_paginas : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio ,$post_por_paginas");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas($post_por_paginas, $conexion)
{
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post / $post_por_paginas);
    return $numero_paginas;
}

//Hallar el id del articulo
function id_articulo($id)
{
    return (int) limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id)
{
    $resultado = $conexion->query(" SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
    $timestamp = strtotime($fecha);
    $meses     = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Ocutbre', 'Noviembre', 'Diciembre'];

    $dia   = date('d', $timestamp);
    $mes   = date('m', $timestamp) - 1;
    $year  = date('y', $timestamp);
    $fecha = " $dia de " . $meses[$mes] . " del 20$year";
    return $fecha;

}

function comprobarSesion()
{
    if (!isset($_SESSION['admin'])) {
        header('Location:' . RUTA);
    }
}
