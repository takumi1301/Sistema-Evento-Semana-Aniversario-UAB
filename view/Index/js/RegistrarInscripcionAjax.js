$(document).ready(function () {
  registrarInscripcion();
});

function registrarInscripcion() {
  $("#RegistrarInscripcion").on("submit", function(e) {
    e.preventDefault();
    var datosInscripcion = $(this).serialize();
    console.log(datosInscripcion);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarInscripcion",
      "data" : datosInscripcion
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarInscripcion').html("Exito al registrar los datos del Inscripcion");
          $('#exitoRegistrarInscripcion').show();
          window.location.href = "index.php?modo=listaDeInscripciones";
        }
        else
        {
          $('#errorRegistrarInscripcion').html("Error al registrar los datos del Inscripcion");
          $('#errorRegistrarInscripcion').show();
        }
    });

  });
}
