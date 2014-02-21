<?php

/**
 * SfGuardUser filter form base class.
 *
 * @package    gestor_distribuido
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseSfGuardUserFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'algorithm'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salt'                          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'last_login'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'is_active'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_super_admin'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sf_guard_user_group_list'      => new sfWidgetFormPropelChoice(array('model' => 'SfGuardGroup', 'add_empty' => true)),
      'sf_guard_user_permission_list' => new sfWidgetFormPropelChoice(array('model' => 'SfGuardPermission', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'username'                      => new sfValidatorPass(array('required' => false)),
      'algorithm'                     => new sfValidatorPass(array('required' => false)),
      'salt'                          => new sfValidatorPass(array('required' => false)),
      'password'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'last_login'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'is_active'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_super_admin'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sf_guard_user_group_list'      => new sfValidatorPropelChoice(array('model' => 'SfGuardGroup', 'required' => false)),
      'sf_guard_user_permission_list' => new sfValidatorPropelChoice(array('model' => 'SfGuardPermission', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addSfGuardUserGroupListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(SfGuardUserGroupPeer::USER_ID, SfGuardUserPeer::ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(SfGuardUserGroupPeer::GROUP_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(SfGuardUserGroupPeer::GROUP_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function addSfGuardUserPermissionListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(SfGuardUserPermissionPeer::USER_ID, SfGuardUserPeer::ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(SfGuardUserPermissionPeer::PERMISSION_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(SfGuardUserPermissionPeer::PERMISSION_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'SfGuardUser';
  }

  public function getFields()
  {
    return array(
      'id'                            => 'Number',
      'username'                      => 'Text',
      'algorithm'                     => 'Text',
      'salt'                          => 'Text',
      'password'                      => 'Text',
      'created_at'                    => 'Date',
      'last_login'                    => 'Date',
      'is_active'                     => 'Number',
      'is_super_admin'                => 'Number',
      'sf_guard_user_group_list'      => 'ManyKey',
      'sf_guard_user_permission_list' => 'ManyKey',
    );
  }
}
