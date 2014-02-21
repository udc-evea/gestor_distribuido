<?php

/**
 * RepoTipoDocumento filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRepoTipoDocumentoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_tipo_documento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoTipoDocumento';
  }

  public function getFields()
  {
    return array(
      'descripcion' => 'Text',
      'id'          => 'Number',
    );
  }
}
