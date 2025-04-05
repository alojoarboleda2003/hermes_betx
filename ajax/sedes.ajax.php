<?php

require_once "../controladores/sedes.controlador.php";
require_once "../modelos/sedes.modelo.php";

class AjaxSedes{
    public $idSede;

    public function ajaxEditarSede(){
        $item = "id";
        $valor = $this->idSede;

        $respuesta = ControladorSedes::ctrMostrarSedes($item, $valor);

        echo json_encode($respuesta);
    }

}

if(isset($_POST["idSede"])){
    $editar = new AjaxSedes();
    $editar->idSede = $_POST["idSede"];
    $editar->ajaxEditarSede();

}