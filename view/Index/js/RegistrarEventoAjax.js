$(document).ready(function () {
  registrarEvento();
});

function registrarEvento() {
  $("#RegistrarEvento").on("submit", function(e) {
    e.preventDefault();
    var datosEvento = $(this).serialize();
    console.log(datosEvento);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarEvento",
      "data" : datosEvento
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarEvento').html("Exito al registrar los datos del Evento");
          $('#exitoRegistrarEvento').show();
          window.location.href = "index.php?modo=listaDeEventos";
        }
        else
        {
          $('#errorRegistrarEvento').html("Error al registrar los datos del Evento");
          $('#errorRegistrarEvento').show();
        }
    });

  });
}
