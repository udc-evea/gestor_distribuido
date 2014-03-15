<div class="btn-group">
  <?php /* @var $Server Server */ ?>
  <?php if($Server->getChequearReplicacionBd()):?>
    <?php $estado = $Server->getCssClassServicio($Server->getEstadoReplicacionBd());?>
    <?php include_partial("server/servicio", array("estado" => $estado, "nombre" => "MySQL"));?>
  <?php endif;?>
  
  <?php if($Server->getChequearMoodledata()):?>
    <?php $estado = $Server->getCssClassServicio($Server->getEstadoMoodledata());?>
      <?php include_partial("server/servicio", array("estado" => $estado, "nombre" => "Moodledata"));?>
  <?php endif;?>
  
  <?php if($Server->getChequearCodigo()):?>
    <?php $estado = $Server->getCssClassServicio($Server->getEstadoCodigo());?>
      <?php include_partial("server/servicio", array("estado" => $estado, "nombre" => "Código"));?>
  <?php endif;?>
</div>