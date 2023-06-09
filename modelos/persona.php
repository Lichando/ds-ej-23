<?php

class personas{
    public $Nombre;
    public $Direccion;
    public $Nrodocumento;
    public $Edad;
    public $Nacionalidad;
    public function MostrarDatos() {
        echo "•Nombre: " . $this->Nombre ."<br>"
        ."•Direccion: " . $this->Direccion."<br>"
        ."•DNI: " . $this->Nrodocumento."<br>"
        ."•Edad " . $this->Edad."<br>";

        echo '<br>'."•-----------------------• " .'<br>'
        ."•ID: " . $this->Nacionalidad->Id ."<br>"
        ."•Descripcion: " . $this->Nacionalidad->Descripcion. "<br>";        
    }
}
?>