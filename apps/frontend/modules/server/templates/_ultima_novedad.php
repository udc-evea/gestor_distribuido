<?php $class = $Server->getCssClass();?>
<span class="<?php echo $class;?>">
  <?php if($Server->getUltimoReporteContenido()):?>
  <a class="action-ver-ultimo-reporte" title="<?php echo $Server->getUltimaNovedad();?>" href="<?php echo url_for('server/verUltimoReporte?id='.$Server->getPrimaryKey());?>" data-remote="true"><?php echo $Server->getUltimaNovedadHuman();?></a>
  <?php echo image_tag('ajax-loader.gif', 'class=ajax-indicator hide');?>
  <?php else:?>
  <?php echo $Server->getUltimaNovedadHuman();?>
  <?php endif;?>
</span>