<div class="modal hide fade" id="modal-codigo">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Datos de configuración</h3>
  </div>
  <div class="modal-body">
    <h5>Código de Reportes: <small id="codigo-reportes"></small></h5>
    <h5>ID para Replicación: <small id="codigo-replicacion"></small></h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<script>
  $script.ready(['twb', 'rails', 'mp_ajax'], function(){
    $("div.sf_admin_list table.table").addClass('table-hover');
    $('.toggleModalCodigo').on('click', function(){
      $('#codigo-reportes').html($(this).data('hash'));
      $('#codigo-replicacion').html($(this).data('id'));
    });
  
    $(".action-ver-ultimo-reporte").on("ajax:success", function(evt, xhr, status){
      bootbox.dialog(xhr, [{label: "Cerrar"}], {header: 'Último reporte'});
    });

    var request_handler = new AjaxRequestHandler();

    $(".action-ver-ultimo-reporte").on("ajax:error", function(evt, xhr, status){
      request_handler.updateOnErrorResponse(evt, xhr, status);
    });

    $(".action-ver-ultimo-reporte").on("ajax:before", function() {
      $(this).toggle().siblings('.ajax-indicator').toggle();
    });

    $(".action-ver-ultimo-reporte").on("ajax:complete", function() {
      $(this).toggle().siblings('.ajax-indicator').toggle();
    });
  });
  
  
</script>
