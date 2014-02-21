<?php

/**
 * RepoProvincia form base class.
 *
 * @method RepoProvincia getObject() Returns the current form's model object
 *
 * @package    gestor_distribuido
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRepoProvinciaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia' => new sfWidgetFormInputText(),
      'id'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'provincia' => new sfValidatorString(array('max_length' => 255)),
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_provincia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoProvincia';
  }


}
