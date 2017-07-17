<?php
session_start();

// SI NO HAY SESSION, DECLARA UN ARRAY SIN DATOS.
if ( !isSet($_SESSION['data']) ) $_SESSION['data']=array();

// TOMA INFORMACIÓN DE PHP://input.. quiero ver como es esto..
// -< se entienda que en $data queda un string de información     >
// -< devulta por file-get_contents de php://input.. E/S          >
$data = json_decode(file_get_contents('php://input'), true);

// Verifica si en el input hay dato de operación.
if ( isSet( $data["op"] ) ) {
    if ( $data["op"]=="append" ) {
        $pos=count($_SESSION['data']);
        $_SESSION['data'][ $pos ]=array( 'nom'=>$data["nom"], 'phone'=>$data["telefon"] );
        }

    if ( $data["op"]=="delete" ) {
        for($i=0; $i<count($_SESSION['data']); $i++)
            if ( $_SESSION['data'][$i]["nom"]==$data["nom"] ) {
                unset($_SESSION['data'][$i]);
                $_SESSION['data']=array_values( $_SESSION['data'] );
                }
        }
    }

echo "names: ".json_encode( $_SESSION['data'] );
?>
