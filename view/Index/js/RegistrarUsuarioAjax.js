$(document).ready(function () {
  registrarUsuario();
});

function registrarUsuario() {
  $("#RegistrarUsuario").on("submit", function(e) {
    e.preventDefault();
    var datosUsuario = $(this).serialize();
    console.log(datosUsuario);
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=insertarUsuario",
      "data" : datosUsuario
    }).done( function(info){
      
        if (info === "Exito")
        {
          $('#exitoRegistrarUsuario').html("Exito al registrar los datos del Usuario 1");
          $('#exitoRegistrarUsuario').show();
          window.location.href = "index.php?modo=listaDeUsuarios";
        }
        else
        {
          $('#errorRegistrarUsuario').html("Error al registrar los datos del Usuario 2");
          $('#errorRegistrarUsuario').show();
        }
    });

  });
}
