$(document).ready(function () {
  actualizarTipoActividad();
});

function actualizarTipoActividad() {
  $("#ActualizarTipoActividad").on("submit", function(e) {
    e.preventDefault();
    var datosTipoActividad = $(this).serialize();
    console.log(datosTipoActividad);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=actualizarTipoActividad",
      "data" : datosTipoActividad
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoActualizarTipoActividad').html("Exito al actualizar los datos del Tipo de Actividad");
          $('#exitoActualizarTipoActividad').show();
          //mostrando datos en la tabla
          window.location.href = "index.php?modo=listaDeTipoActividades";
        }
        else
        {
          $('#errorActualizarTipoActividad').html("Error al actualizar los datos del Tipo de Actividades");
          $('#errorActualizarTipoActividad').show();
          
        }
    });

  });
}
