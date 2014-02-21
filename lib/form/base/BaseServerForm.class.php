<?php

/**
 * Server form base class.
 *
 * @method Server getObject() Returns the current form's model object
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseServerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'repo_localidad_id'        => new sfWidgetFormPropelChoice(array('model' => 'RepoLocalidad', 'add_empty' => false)),
      'descripcion'              => new sfWidgetFormInputText(),
      'ultimo_reporte'           => new sfWidgetFormDateTime(),
      'ultimo_reporte_contenido' => new sfWidgetFormTextarea(),
      'hash'                     => new sfWidgetFormInputText(),
      'chequear_replicacion_bd'  => new sfWidgetFormInputCheckbox(),
      'chequear_moodledata'      => new sfWidgetFormInputCheckbox(),
      'chequear_codigo'          => new sfWidgetFormInputCheckbox(),
      'estado_replicacion_bd'    => new sfWidgetFormInputCheckbox(),
      'estado_moodledata'        => new sfWidgetFormInputCheckbox(),
      'estado_codigo'            => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'repo_localidad_id'        => new sfValidatorPropelChoice(array('model' => 'RepoLocalidad', 'column' => 'id')),
      'descripcion'              => new sfValidatorString(array('max_length' => 50)),
      'ultimo_reporte'           => new sfValidatorDateTime(array('required' => false)),
      'ultimo_reporte_contenido' => new sfValidatorString(),
      'hash'                     => new sfValidatorString(array('max_length' => 32)),
      'chequear_replicacion_bd'  => new sfValidatorBoolean(),
      'chequear_moodledata'      => new sfValidatorBoolean(),
      'chequear_codigo'          => new sfValidatorBoolean(),
      'estado_replicacion_bd'    => new sfValidatorBoolean(array('required' => false)),
      'estado_moodledata'        => new sfValidatorBoolean(array('required' => false)),
      'estado_codigo'            => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('server[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Server';
  }


}
