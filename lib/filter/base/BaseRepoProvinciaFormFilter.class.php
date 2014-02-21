<?php

/**
 * RepoProvincia filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRepoProvinciaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'provincia' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_provincia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoProvincia';
  }

  public function getFields()
  {
    return array(
      'provincia' => 'Text',
      'id'        => 'Text',
    );
  }
}
