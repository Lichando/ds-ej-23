<!--Resolver el ejercicio con la arquitectura propuesta en clase.

Declarar una clase “Mascota” con las siguientes propiedades (Básicas): Id,  Nombre, Raza, 
Declarar una clase "DueñoMascota" con las siguientes propiedades (Básicas): Id, Nombre, Apellido, Documento, Celular, Dirección.
A la clase Mascota, se le debe agregar la clase DueñoMascota como propiedad (Dueño). Además agregarle un método que imprima sus propiedades y todas las propiedades del dueño.
Luego en un archivo llamado index.php instanciar la clase Mascota, completar sus propiedades.
Instanciar la clase DueñoMascota, completar sus propiedades, y asignar el dueño a la mascota. Finalmente llamar al método que imprime las propiedades de la clase Mascota.-->
<?php
require_once "modelos/persona.php";
require_once "modelos/nacionalidad.php";
//Instancia Persona//
$p = new  personas();
$p->Nombre= "Evo";
$p->Direccion= "Ramas 1232";
$p->Nrodocumento= "32131231";
$p->Edad= "23";

//Instancia Nacionalidad//
$n = new  nacionalidad();
$n->Id = 1;
$n->Descripcion = "Bolivia";
$p->Nacionalidad = $n;




$p->MostrarDatos();
?>