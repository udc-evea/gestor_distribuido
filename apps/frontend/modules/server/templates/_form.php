<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('server/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('server/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'server/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['repo_localidad_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['repo_localidad_id']->renderError() ?>
          <?php echo $form['repo_localidad_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['descripcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['descripcion']->renderError() ?>
          <?php echo $form['descripcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ultimo_reporte']->renderLabel() ?></th>
        <td>
          <?php echo $form['ultimo_reporte']->renderError() ?>
          <?php echo $form['ultimo_reporte'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ultimo_reporte_contenido']->renderLabel() ?></th>
        <td>
          <?php echo $form['ultimo_reporte_contenido']->renderError() ?>
          <?php echo $form['ultimo_reporte_contenido'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['hash']->renderLabel() ?></th>
        <td>
          <?php echo $form['hash']->renderError() ?>
          <?php echo $form['hash'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['chequear_replicacion_bd']->renderLabel() ?></th>
        <td>
          <?php echo $form['chequear_replicacion_bd']->renderError() ?>
          <?php echo $form['chequear_replicacion_bd'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['chequear_moodledata']->renderLabel() ?></th>
        <td>
          <?php echo $form['chequear_moodledata']->renderError() ?>
          <?php echo $form['chequear_moodledata'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['chequear_codigo']->renderLabel() ?></th>
        <td>
          <?php echo $form['chequear_codigo']->renderError() ?>
          <?php echo $form['chequear_codigo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_replicacion_bd']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_replicacion_bd']->renderError() ?>
          <?php echo $form['estado_replicacion_bd'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_moodledata']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_moodledata']->renderError() ?>
          <?php echo $form['estado_moodledata'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_codigo']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_codigo']->renderError() ?>
          <?php echo $form['estado_codigo'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
