<?php

/**
 * Public_Registrationdata_Item form base class.
 *
 * @method Public_Registrationdata_Item getObject() Returns the current form's model object
 *
 * @package    dspace
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublic_Registrationdata_ItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'registrationdata_id' => new sfWidgetFormInputHidden(),
      'email'               => new sfWidgetFormTextarea(),
      'token'               => new sfWidgetFormTextarea(),
      'expires'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'registrationdata_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'registrationdata_id', 'required' => false)),
      'email'               => new sfValidatorString(array('required' => false)),
      'token'               => new sfValidatorString(array('required' => false)),
      'expires'             => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_registrationdata_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Public_Registrationdata_Item';
  }

}
