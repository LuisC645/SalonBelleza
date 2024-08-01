<?php

function obtenerServicios() : array {
    try{
        //importar una conexión
        require 'databases.php';

        //escribir el código SQL
        $sql="SELECT * FROM services";
        $consulta=mysqli_query($db, $sql);

        //arreglo vacio 

        $servicios=[];
        $contador=0;

        //obtener los resultados

        while($row=mysqli_fetch_assoc($consulta)){

            $servicios[$contador]['id']=$row['id'];
            $servicios[$contador]['nombre']=$row['nombre'];
            $servicios[$contador]['precio']=$row['precio'];
            $contador++;

        }

        // echo '<pre>';
        // var_dump($servicios);
        // echo '</pre>';

        return $servicios;

        

    }catch(\Throwable $th){
        var_dump($th);
    }
    
    
}



obtenerServicios();