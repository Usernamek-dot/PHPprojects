<?php
class Impresora
{
    //propiedades
    var $tamanio;
    var $numHojas;

    //constructor

    function __construct( $tamanio,$numHojas){
    $this->tamanio = $tamanio;
    $this->numHojas = $numHojas;
        }
        function __destruct(){
            print $this->tamanio."dice: este es el metodo destructor";
        }

    function recibirOrden()
    {
        echo "la impresora ha recibido el documento para imprimir";
    }

    function verificarCartucho()
    {
        echo " la impresora ha verificado que tiene el cartucho";
    }

    function recibirNumOrden()
    {
        echo " la impresora ha verificado cuantas hojas imprimira" . $this->numHojas;
    }
}

class impPariente extends Impresora{

}
//mostrar los metodos

$metodos = get_class_methods("Impresora");
foreach ($metodos as $metodo) {
    echo " El metodo es: " . $metodo . "<br>";
}

//validar clase


if (method_exists("Impresora", "metodito")) {
    echo " el metodo METODITO existe";
} else {
    echo " el metodo METODITO no se encuentra";
}

//crear instancias

echo "<h2> ----------------------------------instancias--------------------------------</h2>";

$impresoraUno = new Impresora("grande",3);
$impresoraCinco = new Impresora("grande",4);
$impresoraPariente = new impPariente("grande",7);



//detectar la clase de una instancia

echo "La instancia -impresoraUno- pertenece a la clase" . get_class($impresoraUno) . "<br>";

//verificar si un objeto pertenece a la clase

echo "Impresora Cinco ";

if (is_a($impresoraCinco, "Impresora")) {
    print "Si pertenece a la clase <br>";
} else {
    print "No pertenece a la clase <br>";
}


//llamar un metodo 

echo " (impresora Uno) " . $impresoraUno->verificarCartucho() . " <br>";
echo " (impresora cinco) " . $impresoraCinco->recibirNumOrden() . "  <br>";

//mostrar propiedades
echo "<h2> ----------------------------------propiedades--------------------------------</h2>";
echo "(impresora cinco)  " . $impresoraCinco->recibirNumOrden() ;


unset($impresoraCinco);


echo "<h2> ----------------------------------herencia--------------------------------</h2>";

print "El pariente de la clase impresora es ". get_parent_class("Impresora"). "  <br>";
print "El pariente de la clase imPariente es ". get_parent_class("imPariente"). "  <br>";

print is_subclass_of("Impresora","imPariente")?"Si":"No";
print "<br>";
print is_subclass_of("imPariente","Impresora")?"Si":"No";
print "<br>";



