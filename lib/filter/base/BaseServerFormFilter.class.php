<?php

/**
 * Server filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseServerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'repo_localidad_id'        => new sfWidgetFormPropelChoice(array('model' => 'RepoLocalidad', 'add_empty' => true)),
      'descripcion'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ultimo_reporte'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ultimo_reporte_contenido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hash'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chequear_replicacion_bd'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'chequear_moodledata'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'chequear_codigo'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'estado_replicacion_bd'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'estado_moodledata'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'estado_codigo'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'repo_localidad_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RepoLocalidad', 'column' => 'id')),
      'descripcion'              => new sfValidatorPass(array('required' => false)),
      'ultimo_reporte'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'ultimo_reporte_contenido' => new sfValidatorPass(array('required' => false)),
      'hash'                     => new sfValidatorPass(array('required' => false)),
      'chequear_replicacion_bd'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'chequear_moodledata'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'chequear_codigo'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'estado_replicacion_bd'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'estado_moodledata'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'estado_codigo'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('server_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Server';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'repo_localidad_id'        => 'ForeignKey',
      'descripcion'              => 'Text',
      'ultimo_reporte'           => 'Date',
      'ultimo_reporte_contenido' => 'Text',
      'hash'                     => 'Text',
      'chequear_replicacion_bd'  => 'Boolean',
      'chequear_moodledata'      => 'Boolean',
      'chequear_codigo'          => 'Boolean',
      'estado_replicacion_bd'    => 'Boolean',
      'estado_moodledata'        => 'Boolean',
      'estado_codigo'            => 'Boolean',
    );
  }
}
