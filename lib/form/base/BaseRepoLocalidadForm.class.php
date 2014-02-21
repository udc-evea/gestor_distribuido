<?php

/**
 * RepoLocalidad form base class.
 *
 * @method RepoLocalidad getObject() Returns the current form's model object
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRepoLocalidadForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'codigo_provincia' => new sfWidgetFormPropelChoice(array('model' => 'RepoProvincia', 'add_empty' => false)),
      'localidad'        => new sfWidgetFormInputText(),
      'codigoPostal'     => new sfWidgetFormInputText(),
      'codigoTelArea'    => new sfWidgetFormInputText(),
      'latitud'          => new sfWidgetFormInputText(),
      'longitud'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'codigo_provincia' => new sfValidatorPropelChoice(array('model' => 'RepoProvincia', 'column' => 'id')),
      'localidad'        => new sfValidatorString(array('max_length' => 100)),
      'codigoPostal'     => new sfValidatorString(array('max_length' => 10)),
      'codigoTelArea'    => new sfValidatorString(array('max_length' => 5)),
      'latitud'          => new sfValidatorNumber(),
      'longitud'         => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('repo_localidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoLocalidad';
  }


}
