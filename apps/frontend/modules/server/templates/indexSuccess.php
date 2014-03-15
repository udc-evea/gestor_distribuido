<h1>Lista de Servidores</h1>
<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-striped table-hover table-condensed">
      <thead>
        <tr>
          <th>Servidor</th>
          <th>Ultimo reporte</th>
          <th>Estado servicios</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Servers as $Server): ?>
        <?php $class = $Server->getCssClassServer();?>
        <tr class="<?php echo $class;?>">
          <td><a href="<?php echo url_for('server/edit?id='.$Server->getId()) ?>"><?php echo $Server->getCompleto() ?></a></td>
          <td><?php include_partial("server/ultima_novedad", array("Server" => $Server));?></td>
          <td>
            <?php include_partial("server/servicios", array("Server" => $Server));?>
          </td>
          <td>
            <a href="#modal_codigos" data-toggle="modal" class="toggleModalCodigo" data-hash='<?php echo $Server->getHash();?>' data-id='<?php echo $Server->getId();?>'><span class="glyphicon glyphicon-lock"></span> Ver config.</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="<?php echo url_for('server/new') ?>">Registrar nuevo</a>
  </div>
</div>

<?php include_partial("server/modal_codigos");?>
<?php include_partial("server/modal_ultima_novedad", array("Server" => $Server));?>

<?php slot("action_js");?>
    <script src="<?php echo javascript_path("server");?>"></script>
<?php end_slot();?>
