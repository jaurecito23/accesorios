<?php


require "../includes/funciones/app.php";


 $id_producto = $_POST["id"];
 $id_producto = filter_var($id_producto,FILTER_VALIDATE_INT);


 $id_usuario = NULL;
 session_start();
$id_usuario = $_SESSION["id_usuario"] ?? null;
$existeUsuario = false;
$resultado = false;

if($id_usuario){
    $existeUsuario = true;

    $query = "DELETE FROM favoritos WHERE id_usuario=${id_usuario} AND id_producto = ${id_producto};";

    $resultado= mysqli_query($db, $query);

}



 echo json_encode(array(

    "existeUsuario"=>$existeUsuario,
    "resultado"=>$resultado

 ));



// echo json_encode($_SESSION);
//echo $producto;
