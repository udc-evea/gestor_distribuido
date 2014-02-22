<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form role="form" class="form-horizontal" action="<?php echo url_for('server/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <?php echo $form;?>
  <div class="form-row">
    <div class="col-sm-2">
      &nbsp;<a href="<?php echo url_for('server/index') ?>">Volver al listado</a>
    </div>
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary" value="Guardar" />
      <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo link_to('Delete', 'server/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Seguro?', 'class' => 'btn btn-danger')) ?>
      <?php endif; ?>
    </div>
</form>
