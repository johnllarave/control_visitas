<?php

use PHPUnit\Framework\TestCase;

//require './vendor/autoload.php';
include './Controller/ActualizaDatosControler.php';

class ActualizaDatosControlerTest extends TestCase {

    public function TestActualizaDatosControler(){

        $actualizadatosmodel = new ActualizaDatosModel();
        $this->assertEquals("John Llarave jollarave@poligran.edu.co 3212713762", $actualizadatosmodel->actualizaDatos("John", "Llarave", "jollarave@poligran.edu.co", "3212713762"));
    }
}

?>