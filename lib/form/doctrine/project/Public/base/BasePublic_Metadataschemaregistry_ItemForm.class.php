<?php

/**
 * Public_Metadataschemaregistry_Item form base class.
 *
 * @method Public_Metadataschemaregistry_Item getObject() Returns the current form's model object
 *
 * @package    dspace
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublic_Metadataschemaregistry_ItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'metadata_schema_id' => new sfWidgetFormInputHidden(),
      'namespace'          => new sfWidgetFormTextarea(),
      'short_id'           => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'metadata_schema_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'metadata_schema_id', 'required' => false)),
      'namespace'          => new sfValidatorString(array('required' => false)),
      'short_id'           => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_metadataschemaregistry_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Public_Metadataschemaregistry_Item';
  }

}
