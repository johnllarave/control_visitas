<?php

use PHPUnit\Framework\TestCase;

include '../Controller/ActualizaDatosControler.php';

class ActualizaDatosControlerTest {

    public function TestActualizaDatosControler(){

        $actualizadatosmodel = new ActualizaDatosModel();
        $this->assertEquals("John Llarave jollarave@poligran.edu.co 3212713762", $actualizadatosmodel->actualizaDatos("John", "Llarave", "jollarave@poligran.edu.co", "3212713762"));
    }
}

?>