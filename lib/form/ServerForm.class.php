<?php

/**
 * Server form.
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
class ServerForm extends BaseServerForm
{
  public function configure()
  {
    unset($this['hash'], $this['ultimo_reporte'], $this['ultimo_reporte_contenido'], $this['estado_replicacion_bd'], $this['estado_moodledata'], $this['estado_codigo']);
    
    $this->widgetSchema['repo_localidad_id']->setAttribute('class', 'form-control');
    $this->widgetSchema['descripcion']->setAttribute('class', 'form-control');

    $this->widgetSchema['repo_localidad_id']->setLabel('Localidad');
    $this->widgetSchema['descripcion']->setLabel('Descripción');
    $this->widgetSchema['chequear_replicacion_bd']->setLabel('Comprobar replicación BD');
    $this->widgetSchema['chequear_moodledata']->setLabel('Sincronizar moodledata');
    $this->widgetSchema['chequear_codigo']->setLabel('Sincronizar código fuente');
    
  }
}
