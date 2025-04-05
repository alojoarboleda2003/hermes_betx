$(document).on("click", ".btnEditarSede",function(){
    var idSede = $(this).attr("idSede");
    console.log("idSede : ",idSede);

    var datos = new FormData();
    datos.append("idSede", idSede); 
    $.ajax({
        url: "ajax/sedes.ajax.php",
        method : "POST",
        data : datos,
        cache : false,
        contentType : false,
        processData : false,
        dataType : "json",
        success : function(respuesta){
            //console.log("respuesta :", respuesta)

            $("#editNombreSede").val(respuesta["nombre"]);
            $("#editDireccionSede").val(respuesta["direccion"]);
            $("#editDescripcionSede").val(respuesta["descripcion"]);
            $("#idEditSede").val(respuesta["id"]);
        }
    })
})

