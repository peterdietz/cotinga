<?php

/**
 * Public_Bi2Dmap_Item form base class.
 *
 * @method Public_Bi2Dmap_Item getObject() Returns the current form's model object
 *
 * @package    dspace
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublic_Bi2Dmap_ItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'map_id'      => new sfWidgetFormInputHidden(),
      'item_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Item_Item'), 'add_empty' => true)),
      'distinct_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Bi2Dis_Item'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'map_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'map_id', 'required' => false)),
      'item_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Item_Item'), 'required' => false)),
      'distinct_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Bi2Dis_Item'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_bi2_dmap_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Public_Bi2Dmap_Item';
  }

}
