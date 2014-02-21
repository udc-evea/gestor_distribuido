<?php

/**
 * RepoNivelEstudios form base class.
 *
 * @method RepoNivelEstudios getObject() Returns the current form's model object
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRepoNivelEstudiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nivel_estudios' => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nivel_estudios' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_nivel_estudios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoNivelEstudios';
  }


}
