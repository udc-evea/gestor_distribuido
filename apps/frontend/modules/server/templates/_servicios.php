<div class="btn-group">
  <?php if($Server->getChequearReplicacionBd()):?>
    <?php if($Server->estaActualizadoReplicacionBd()):?>
      <?php include_partial("server/servicio", array("estado" => "success", "nombre" => "MySQL"));?>
    <?php else:?>
      <?php include_partial("server/servicio", array("estado" => "warning", "nombre" => "MySQL"));?>
    <?php endif;?>
  <?php endif;?>
  
  <?php if($Server->getChequearMoodledata()):?>
    <?php if($Server->estaActualizadoMoodledata()):?>
      <?php include_partial("server/servicio", array("estado" => "success", "nombre" => "Moodledata"));?>
    <?php else:?>
      <?php include_partial("server/servicio", array("estado" => "warning", "nombre" => "Moodledata"));?>
    <?php endif;?>
  <?php endif;?>
  
  <?php if($Server->getChequearCodigo()):?>
    <?php if($Server->estaActualizadoCodigo()):?>
      <?php include_partial("server/servicio", array("estado" => "success", "nombre" => "Código"));?>
    <?php else:?>
      <?php include_partial("server/servicio", array("estado" => "warning", "nombre" => "Código"));?>
    <?php endif;?>
  <?php endif;?>
</div>