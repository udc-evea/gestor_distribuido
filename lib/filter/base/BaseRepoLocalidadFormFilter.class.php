<?php

/**
 * RepoLocalidad filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRepoLocalidadFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_provincia' => new sfWidgetFormPropelChoice(array('model' => 'RepoProvincia', 'add_empty' => true)),
      'localidad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigoPostal'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigoTelArea'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitud'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitud'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_provincia' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RepoProvincia', 'column' => 'id')),
      'localidad'        => new sfValidatorPass(array('required' => false)),
      'codigoPostal'     => new sfValidatorPass(array('required' => false)),
      'codigoTelArea'    => new sfValidatorPass(array('required' => false)),
      'latitud'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitud'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('repo_localidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoLocalidad';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'codigo_provincia' => 'ForeignKey',
      'localidad'        => 'Text',
      'codigoPostal'     => 'Text',
      'codigoTelArea'    => 'Text',
      'latitud'          => 'Number',
      'longitud'         => 'Number',
    );
  }
}
