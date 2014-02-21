<h1>Servers List</h1>

<table class="table table-bordered table-condensed table-striped table-hover">
  <thead>
    <tr>
      <th>Servidor</th>
      <th>Ultimo reporte</th>
      <th>Estado servicios</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Servers as $Server): ?>
    <tr>
      <td><a href="<?php echo url_for('server/edit?id='.$Server->getId()) ?>"><?php echo $Server->getCompleto() ?></a></td>
      <td><?php echo $Server->getDescripcion() ?></td>
      <td><?php echo $Server->getUltimoReporte() ?></td>
      <td><?php echo $Server->getEstadoReplicacionBd() ?></td>
      <td><?php echo $Server->getEstadoMoodledata() ?></td>
      <td><?php echo $Server->getEstadoCodigo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('server/new') ?>">Registrar nuevo</a>
