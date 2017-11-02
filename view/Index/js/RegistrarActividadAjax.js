$(document).ready(function () {
  registrarActividad();
});

function registrarActividad() {
  $("#RegistrarActividad").on("submit", function(e) {
    e.preventDefault();
    var datosActividad = $(this).serialize();
    console.log(datosActividad);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarActividad",
      "data" : datosActividad
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarActividad').html("Exito al registrar los datos de la Actividad 1");
          $('#exitoRegistrarActividad').show();
          window.location.href = "index.php?modo=listaDeActividades";
        }
        else
        {
          $('#errorRegistrarActividad').html("Error al registrar los datos de la Actividad 2");
          $('#errorRegistrarActividad').show();
        }
    });

  });
}
