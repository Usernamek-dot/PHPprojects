<?php



class Avion
{

    //propiedades

    var $numeroTurbinas;

    //constructor

    function __construct($numeroTurbinas)
    {
        $this->numeroTurbinas = $numeroTurbinas;
    }

    function __destruct()
    {
        print $this->numeroTurbinas . "dice: este es un destructor <br>";
    }

    //metodos
    function despegar()
    {
        echo "el avion ha despegado";
    }
    function aterrizar()
    {
        echo "el avion ha aterrizado";
    }
    function tomarDireccion()
    {
        echo "el avion ha tomado una dirección ";
    }
    function abrirBodeja()
    {
        echo "el avion ha abierto la bodega de carga";
    }
    //metodo con propiedades
    function EncenderTurbina()
    {
        return $this->numeroTurbinas . "  turbinas Han sido encendidas";
    }
}





class AvionPariente extends Avion{


}

echo "<h2> ----------------------------------Metodos en clase--------------------------------</h2>";



//mostrar todos los metodos de la clasee

$metodos = get_class_methods("Avion");
foreach ($metodos as $metodo) {
    echo " El metodo es : " . $metodo . "<br>";
}


//validacion metodos

if (method_exists("Avion", "despegar")) {
    echo "El metodo DESPEGAR si existe <br>";
} else {
    echo "El metodo DESPEGAR no  existe <br>";
}

if (method_exists("Avion", "encenderTurbina")) {
    echo "El metodo ENCENDERTURBINA si existe <br>";
} else {
    echo "El metodo ENCENDERTURBINA no  existe <br>";
}



//crear instancias

echo "<h2> ----------------------------------instancias--------------------------------</h2>";

$avionUno = new Avion(4);
$avionDos = new Avion(4);
$avionTres = new Avion(7);
$avionCuatro = new Avion(8);
$avionPariente = new AvionPariente(9);

//detectar la clase de una instancia

echo "La instancia -avionuno- pertenece a la clase" . get_class($avionUno) . "<br>";

//verificar si un objeto pertenece a la clase

echo "avion tres";

if (is_a($avionTres, "Avion")) {
    print "Si es un avion <br>";
} else {
    print "no es un avion <br>";
}


//llamar un metodo 

echo " (Avion cuatro) " . $avionCuatro->aterrizar() . " :<br>";
echo " (avion dos) " . $avionDos->abrirBodeja() . "  <br>";
echo "(avion tres)  " . $avionTres->encenderTurbina();

unset($avionTres);
unset($avionDos);

echo "<h2> ----------------------------------herencia--------------------------------</h2>";

print "El pariente de la clase avion es ". get_parent_class("Avion"). "  <br>";
print "El pariente de la clase avionPariente es ". get_parent_class("AvionPariente"). "  <br>";

print is_subclass_of("Avion","AvionPariente")?"Si":"No";
print "<br>";
print is_subclass_of("AvionPariente","Avion")?"Si":"No";
print "<br>";







