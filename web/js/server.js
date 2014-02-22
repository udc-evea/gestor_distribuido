var Module_Server =  {
  init: function() { 
    this.modalDatosServer();
    this.modalUltimoReporte();
  },
  
  modalDatosServer: function() {
    $('.toggleModalCodigo').on('click', function() {
      $('#codigo_reportes').html($(this).data('hash'));
      $('#codigo_replicacion').html($(this).data('id'));
    });
  }, 
  
  modalUltimoReporte: function() {
    $(".action-ver-ultimo-reporte").on("ajax:success", function(evt, xhr, status) {
      bootbox.dialog({
        message: xhr,
        title: 'Último reporte',
        buttons: {
          cerrar: {
            label: "Cerrar",
            className: "btn-default btn-sm"
          }
        }
      });
    });

    $(".action-ver-ultimo-reporte").on("ajax:error", function(evt, xhr, status) {
      bootbox.dialog({
        message: "No se pudo completar la operación: error "+xhr.status,
        title: 'Último reporte',
        buttons: {
          cerrar: {
            label: "Cerrar",
            className: "btn-danger btn-sm"
          }
        }
      }); 
    });

    $(".action-ver-ultimo-reporte").on("ajax:before", function() {
      $(this).toggle().siblings('.ajax-indicator').toggle();
    });

    $(".action-ver-ultimo-reporte").on("ajax:complete", function() {
      $(this).toggle().siblings('.ajax-indicator').toggle();
    });
  }
};

$(function(){
  Module_Server.init();
});



