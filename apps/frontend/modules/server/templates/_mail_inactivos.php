<h1>Posibles problemas de conectividad</h1>
<p>Se han detectado <strong><?php echo count($servers);?> servidores inactivos</strong> según los datos del <a href="<?php echo url_for("servers/index");?>">Sistema</a>.</p>
<table border="1">
  <tr>
    <th>Localidad</th>
    <th>Instalado en</th>
    <th>Último reporte</th>
  </tr>
  <?php foreach($servers as $server):?>
  <tr>
    <td><?php echo $server->getLocalidad();?></td>
    <td><?php echo $server->getDescripcion();?></td>
    <td><?php echo $server->getUltimaNovedad();?></td>
  </tr>
  <?php endforeach;?>
</table>

<p>Atte.,</p>

<p><a href="http://udc.edu.ar">Universidad del Chubut</a></p>