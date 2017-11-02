$(document).ready(function () {
  registrarTipoActividad();
});

function registrarTipoActividad() {
  $("#RegistrarTipoActividad").on("submit", function(e) {
    e.preventDefault();
    var datosTipoActividad = $(this).serialize();
    console.log(datosTipoActividad);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarTipoActividad",
      "data" : datosTipoActividad
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarTipoActividad').html("Exito al registrar los datos del Tipo de Actividad");
          $('#exitoRegistrarTipoActividad').show();
          window.location.href = "index.php?modo=listaDeTipoActividades";
        }
        else
        {
          $('#errorRegistrarTipoActividad').html("Error al registrar los datos del Tipo de Actividad");
          $('#errorRegistrarTipoActividad').show();
        }
    });

  });
}
