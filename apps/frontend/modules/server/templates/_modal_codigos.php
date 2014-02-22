<div class="modal fade" id="modal_codigos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Configuración de servidor</h4>
      </div>
      <div class="modal-body">
        <h4>Código de Reportes: <small id="codigo_reportes"></small></h4>
        <h4>ID para Replicación: <small id="codigo_replicacion"></small></h4>
      </div>
      <div class="modal-footer">
        <a href="<?php echo sfConfig::get("app_wiki_config_servers");?>" class="text-muted text-left pull-left" target="_blank"><small>Cómo configurar los servidores</small></a>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->