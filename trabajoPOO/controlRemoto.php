<?php

// crear clase

class ControlRemoto
{

    // propiedades
    var $color;

    //constructor

    function __construct($color)
    {
        $this->color = $color;
    }

    function __destruct()
    {
        print $this->color . "este es el destructor" ."  <br>";
    }


    function encender()
    {
        echo "el control remoto ha ensendido y tiene el color" . $this->color;
    }
    function apagar()
    {
        echo "el control remoto se ha apagado";
    }
    function bajarVolumen()
    {
        echo "el control remoto ha bajado el volumen del dispositivo";
    }
    function subirVolumen()
    {
        echo "el control remoto ha subido el volumen del dispositivo";
    }
}

class RemotoPariente extends ControlRemoto{

}



//mostrar metodos por pantalla

$metodos = get_class_methods("controlRemoto");
foreach ($metodos as $metodo) {
    echo "El metodo de  esta clase es :" . $metodo . "<br>";
}

//validacion clase

if (class_exists('controlRemoto')) {
    print "la clase -controlRemoto- SI existe <br>";
} else {
    print "la clase -controlRemoto- NO existe <br>";
}

//validacion metodos

if (method_exists("controlRemoto", "encender")) {
    echo "El metodo ENCENDER si existe <br>";
} else {
    echo "El metodo ENCENDER  existe <br>";
}


//crear instancias

echo "<h2> ----------------------------------instancias--------------------------------</h2>";

$controlUno = new ControlRemoto("amarillo");
$controlDos = new ControlRemoto("verde");
$remPariente = new RemotoPariente("cafe");


//detectar la clase de una instancia

echo "La instancia -controlUno- pertenece a la clase" . get_class($controlUno) . "<br>";

//verificar si un objeto pertenece a la clase

echo "Control Uno ";

if (is_a($controlUno, "ControlRemoto")) {
    print "Si pertenece a la clase <br>";
} else {
    print "No pertenece a la clase <br>";
}


//llamar un metodo 

echo " (Control Uno) " . $controlUno->apagar() . " <br>";
echo " (Control Dos) " . $controlDos->subirVolumen() . "  <br>";
//mostrar propiedades
echo "(control 2)  " . $controlDos->encender();

unset($controlDos);

echo "<h2> ----------------------------------herencia--------------------------------</h2>";

print "El pariente de la clase control remoto es ". get_parent_class("ControlRemoto"). "  <br>";
print "El pariente de la clase rem Pariente es ". get_parent_class("RemotoPariente"). "  <br>";

print is_subclass_of("controlRemoto","RemotoPariente")?"Si":"No";
print "<br>";
print is_subclass_of("RemotoPariente","controlRemoto")?"Si":"No";
print "<br>";


