<?php

/**
 * RepoNivelEstudios filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRepoNivelEstudiosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nivel_estudios' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nivel_estudios' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_nivel_estudios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoNivelEstudios';
  }

  public function getFields()
  {
    return array(
      'nivel_estudios' => 'Text',
      'id'             => 'Number',
    );
  }
}
