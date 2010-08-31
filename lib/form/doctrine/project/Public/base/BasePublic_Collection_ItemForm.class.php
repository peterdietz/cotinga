<?php

/**
 * Public_Collection_Item form base class.
 *
 * @method Public_Collection_Item getObject() Returns the current form's model object
 *
 * @package    dspace
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePublic_Collection_ItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'collection_id'          => new sfWidgetFormInputHidden(),
      'name'                   => new sfWidgetFormTextarea(),
      'short_description'      => new sfWidgetFormTextarea(),
      'introductory_text'      => new sfWidgetFormTextarea(),
      'logo_bitstream_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Bitstream_Item'), 'add_empty' => true)),
      'template_item_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Item_Item'), 'add_empty' => true)),
      'provenance_description' => new sfWidgetFormTextarea(),
      'license'                => new sfWidgetFormTextarea(),
      'copyright_text'         => new sfWidgetFormTextarea(),
      'side_bar_text'          => new sfWidgetFormTextarea(),
      'workflow_step_1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep1'), 'add_empty' => true)),
      'workflow_step_2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep2'), 'add_empty' => true)),
      'workflow_step_3'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep3'), 'add_empty' => true)),
      'submitter'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForSubmitter'), 'add_empty' => true)),
      'admin'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForAdmin'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'collection_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'collection_id', 'required' => false)),
      'name'                   => new sfValidatorString(array('required' => false)),
      'short_description'      => new sfValidatorString(array('required' => false)),
      'introductory_text'      => new sfValidatorString(array('required' => false)),
      'logo_bitstream_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Bitstream_Item'), 'required' => false)),
      'template_item_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Item_Item'), 'required' => false)),
      'provenance_description' => new sfValidatorString(array('required' => false)),
      'license'                => new sfValidatorString(array('required' => false)),
      'copyright_text'         => new sfValidatorString(array('required' => false)),
      'side_bar_text'          => new sfValidatorString(array('required' => false)),
      'workflow_step_1'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep1'), 'required' => false)),
      'workflow_step_2'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep2'), 'required' => false)),
      'workflow_step_3'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForWorkflowStep3'), 'required' => false)),
      'submitter'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForSubmitter'), 'required' => false)),
      'admin'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Public_Epersongroup_Item_ForAdmin'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_collection_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Public_Collection_Item';
  }

}
