<?php
class ControladorSedes {
    /*=============================================
    MOSTRAR SEDES
    =============================================*/
    static public function ctrMostrarSedes($item, $valor)
    {
        $tabla = "sedes";
        $respuesta = ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);
        return $respuesta;
    }
}