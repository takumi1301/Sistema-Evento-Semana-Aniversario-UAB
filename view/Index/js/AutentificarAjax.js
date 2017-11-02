$(document).ready(function () {
  enviarDatos();
});

function enviarDatos() {
  $("#autentificacion").on("submit", function(e) {
    //debugger;
    e.preventDefault(); 
    var frm = $(this).serialize();
    console.log( frm );
    $.ajax({
      "method" : "POST",
      "url" : "index.php?modo=CamposLlenos",
      "data" : frm
    }).done( function(info) {
      $("#mensaje").html("");
      switch (info) {
        case '1':
          window.location.href = "view/menuAdministrador/";
          break;

        case '2':
          window.location.href = "view/menuObservador/";
          break;
        /*  si hay otros tipos de usuarios es crear otro menu y anadir estos casos
        case '3':
          window.location.href = "view/menuContador/";
          break;

        case '4':
          window.location.href = "view/menuGerente/";
          break;
          */

        default:
          $("#mensaje").addClass("alert");
          $("#mensaje").addClass("alert-danger");
          $("#mensaje").addClass("alert-dismissable");
          $("#mensaje").append(info);
          parpa();
          function parpa() {
             $('#mensaje').fadeIn(500).delay(250).fadeOut(300, parpa)
             setTimeout("$('#mensaje').stop(true,true).css('opacity', 1)", 4000);
          }
          break;
      }

    });

  });
}
