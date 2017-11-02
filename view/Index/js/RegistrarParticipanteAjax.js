$(document).ready(function () {
  registrarParticipante();
});

function registrarParticipante() {
  $("#RegistrarParticipante").on("submit", function(e) {
    e.preventDefault();
    var datosParticipante = $(this).serialize();
    console.log(datosParticipante);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarParticipante",
      "data" : datosParticipante
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarParticipante').html("Exito al registrar los datos del Participante");
          $('#exitoRegistrarParticipante').show();
        }
        else
        {
          $('#errorRegistrarParticipante').html("Error al registrar los datos del Participante2");
          $('#errorRegistrarParticipante').show();
          
        }
    });

  });
}
