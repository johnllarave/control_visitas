<?php

use PHPUnit\Framework\TestCase;

include '../Controller/ActualizaPassControler.php';

class ActualizaPassControlerTest {

    public function TestActualizaPassControler(){

        $actualizapassmodel = new ActualizaPassModel();
        $this->assertEquals("John Llarave jollarave@poligran.edu.co 3212713762", $actualizadatosmodel->actualizaDatos("John", "Llarave", "jollarave@poligran.edu.co", "3212713762"));
    }
}

?>