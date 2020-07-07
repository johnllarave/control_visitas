<?php

use PHPUnit\Framework\TestCase;

require './vendor/autoload.php';
include './Controller/ActualizaDatosControler.php';

class ActualizaDatosControlerTest extends TestCase {

    public function TestActualizaDatosControler(){

        $actualizadatoscontroller = new ActualizaDatosController();
        $this->assertEquals("John Llarave jollarave@poligran.edu.co 3212713762", $actualizadatoscontroller->actualizaDatos("John", "Llarave", "jollarave@poligran.edu.co", "3212713762"));
    }
}

?>