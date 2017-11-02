$(document).ready(function () {
  actualizarEvento();
});

function actualizarEvento() {
  $("#ActualizarEvento").on("submit", function(e) {
    e.preventDefault();
    var datosEvento = $(this).serialize();
    console.log(datosEvento);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=actualizarEvento",
      "data" : datosEvento
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoActualizarEvento').html("Exito al actualizar los datos del Evento");
          $('#exitoActualizarEvento').show();
          //mostrando datos en la tabla
          window.location.href = "index.php?modo=listaDeEventos";
        }
        else
        {
          $('#errorActualizarEvento').html("Error al actualizar los datos del Evento");
          $('#errorActualizarEvento').show();
          
        }
    });

  });
}
