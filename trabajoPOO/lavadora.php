<?php


class Lavadora
{

    //propiedades
    var $costo;
    var $numCompartimientos;

    //constructor

    function __construct( $costo,$numCompartimientos){
    $this->costo = $costo;
    $this->numCompartimientos = $numCompartimientos;
        }
        function __destruct(){
            print $this->numCompartimientos." este es el destructor";
        }


    function definirTiempo()
    {
        echo "Se ha definido el tiempo de lavado";
    }
    function abrirCompartimientos()
    {
        echo " los compartimientos" . $this->numCompartimientos . "para hechar los detergentes se abriran";
    }
}

class LPariente extends Lavadora{

}

//mostrar los metodos

$metodos = get_class_methods("Lavadora");
foreach ($metodos as $metodo) {
    echo "El metodo es :" . $metodo . "<br>";
}

//validar clase 

if (class_exists("Lavadorsita")) {
    echo "la clase LAVADORA existe";
} else {
    echo "la clase LAVADORA no se encuentra";
}


//crear instancias

echo "<h2> ----------------------------------instancias--------------------------------</h2>";

$lavadoraUno = new Lavadora(6,"600");
$lavadoraDos = new Lavadora(5,"900");
$lavadoraP = new LPariente(5,"300");

 //llenar propiedades

// $lavadoraUno->numCompartimientos = 6;
// $lavadoraDos->numCompartimientos = 3;

//detectar la clase de una instancia

echo "La instancia -lavadora Uno- pertenece a la clase" . get_class($lavadoraUno) . "<br>";

//verificar si un objeto pertenece a la clase

echo "lavadora dos";

if (is_a($lavadoraDos, "Lavadora")) {
    print "  Si pertenece a la clase <br>";
} else {
    print " no pertenece a la clase <br>";
}


//llamar un metodo y mostrar su contenido

echo " (Lavadora dos) " . $lavadoraDos->definirTiempo() . " :<br>";

//mostrar propiedades
echo "<h2> ----------------------------------propiedades--------------------------------</h2>";

echo " (lavadora uno) " .$lavadoraUno->abrirCompartimientos()."  <br>";

unset($lavadora);


echo "<h2> ----------------------------------herencia--------------------------------</h2>";

print "El pariente de la clase lavadora es ". get_parent_class("Lavadora"). "  <br>";
print "El pariente de la clase LPariente es ". get_parent_class("LPariente"). "  <br>";

print is_subclass_of("Lavadora","LPariente")?"Si":"No";
print "<br>";
print is_subclass_of("LPariente","Lavadora")?"Si":"No";
print "<br>";
