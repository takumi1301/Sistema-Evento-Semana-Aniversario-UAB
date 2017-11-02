$(document).ready(function () {
  actualizarActividad();
});

function actualizarActividad() {
  $("#ActualizarActividad").on("submit", function(e) {
    e.preventDefault();
    var datosActividad = $(this).serialize();
    console.log(datosActividad);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=actualizarActividad",
      "data" : datosActividad
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoActualizarActividad').html("Exito al actualizar los datos del Actividad");
          $('#exitoActualizarActividad').show();
          //mostrando datos en la tabla
          window.location.href = "index.php?modo=listaDeActividades";
        }
        else
        {
          $('#errorActualizarActividad').html("Error al actualizar los datos del Actividad");
          $('#errorActualizarActividad').show();
          
        }
    });

  });
}
