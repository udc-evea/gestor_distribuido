<?php

/**
 * RepoTipoDocumento form base class.
 *
 * @method RepoTipoDocumento getObject() Returns the current form's model object
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRepoTipoDocumentoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion' => new sfWidgetFormInputText(),
      'id'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'descripcion' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_tipo_documento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoTipoDocumento';
  }


}
