<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_Collection_Item', 'doctrine');

/**
 * BasePublic_Collection_Item
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $collection_id
 * @property string $name
 * @property string $short_description
 * @property string $introductory_text
 * @property integer $logo_bitstream_id
 * @property integer $template_item_id
 * @property string $provenance_description
 * @property string $license
 * @property string $copyright_text
 * @property string $side_bar_text
 * @property integer $workflow_step_1
 * @property integer $workflow_step_2
 * @property integer $workflow_step_3
 * @property integer $submitter
 * @property integer $admin
 * @property Public_Bitstream_Item $Public_Bitstream_Item
 * @property Public_Item_Item $Public_Item_Item
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item_ForWorkflowStep1
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item_ForWorkflowStep2
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item_ForWorkflowStep3
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item_ForAdmin
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item_ForSubmitter
 * @property Doctrine_Collection $Public_Subscription_Items
 * @property Doctrine_Collection $Public_Community2collection_Items
 * @property Doctrine_Collection $Public_Collection2item_Items
 * @property Doctrine_Collection $Public_CollectionItemCount_Items
 * @property Doctrine_Collection $Public_Workflowitem_Items
 * @property Doctrine_Collection $Public_HarvestedCollection_Items
 * @property Doctrine_Collection $Public_Workspaceitem_Items
 * 
 * @method integer                  getCollectionId()                              Returns the current record's "collection_id" value
 * @method string                   getName()                                      Returns the current record's "name" value
 * @method string                   getShortDescription()                          Returns the current record's "short_description" value
 * @method string                   getIntroductoryText()                          Returns the current record's "introductory_text" value
 * @method integer                  getLogoBitstreamId()                           Returns the current record's "logo_bitstream_id" value
 * @method integer                  getTemplateItemId()                            Returns the current record's "template_item_id" value
 * @method string                   getProvenanceDescription()                     Returns the current record's "provenance_description" value
 * @method string                   getLicense()                                   Returns the current record's "license" value
 * @method string                   getCopyrightText()                             Returns the current record's "copyright_text" value
 * @method string                   getSideBarText()                               Returns the current record's "side_bar_text" value
 * @method integer                  getWorkflowStep1()                             Returns the current record's "workflow_step_1" value
 * @method integer                  getWorkflowStep2()                             Returns the current record's "workflow_step_2" value
 * @method integer                  getWorkflowStep3()                             Returns the current record's "workflow_step_3" value
 * @method integer                  getSubmitter()                                 Returns the current record's "submitter" value
 * @method integer                  getAdmin()                                     Returns the current record's "admin" value
 * @method Public_Bitstream_Item    getPublicBitstreamItem()                       Returns the current record's "Public_Bitstream_Item" value
 * @method Public_Item_Item         getPublicItemItem()                            Returns the current record's "Public_Item_Item" value
 * @method Public_Epersongroup_Item getPublicEpersongroupItemForWorkflowStep1()    Returns the current record's "Public_Epersongroup_Item_ForWorkflowStep1" value
 * @method Public_Epersongroup_Item getPublicEpersongroupItemForWorkflowStep2()    Returns the current record's "Public_Epersongroup_Item_ForWorkflowStep2" value
 * @method Public_Epersongroup_Item getPublicEpersongroupItemForWorkflowStep3()    Returns the current record's "Public_Epersongroup_Item_ForWorkflowStep3" value
 * @method Public_Epersongroup_Item getPublicEpersongroupItemForAdmin()            Returns the current record's "Public_Epersongroup_Item_ForAdmin" value
 * @method Public_Epersongroup_Item getPublicEpersongroupItemForSubmitter()        Returns the current record's "Public_Epersongroup_Item_ForSubmitter" value
 * @method Doctrine_Collection      getPublicSubscriptionItems()                   Returns the current record's "Public_Subscription_Items" collection
 * @method Doctrine_Collection      getPublicCommunity2collectionItems()           Returns the current record's "Public_Community2collection_Items" collection
 * @method Doctrine_Collection      getPublicCollection2itemItems()                Returns the current record's "Public_Collection2item_Items" collection
 * @method Doctrine_Collection      getPublicCollectionItemCountItems()            Returns the current record's "Public_CollectionItemCount_Items" collection
 * @method Doctrine_Collection      getPublicWorkflowitemItems()                   Returns the current record's "Public_Workflowitem_Items" collection
 * @method Doctrine_Collection      getPublicHarvestedCollectionItems()            Returns the current record's "Public_HarvestedCollection_Items" collection
 * @method Doctrine_Collection      getPublicWorkspaceitemItems()                  Returns the current record's "Public_Workspaceitem_Items" collection
 * @method Public_Collection_Item   setCollectionId()                              Sets the current record's "collection_id" value
 * @method Public_Collection_Item   setName()                                      Sets the current record's "name" value
 * @method Public_Collection_Item   setShortDescription()                          Sets the current record's "short_description" value
 * @method Public_Collection_Item   setIntroductoryText()                          Sets the current record's "introductory_text" value
 * @method Public_Collection_Item   setLogoBitstreamId()                           Sets the current record's "logo_bitstream_id" value
 * @method Public_Collection_Item   setTemplateItemId()                            Sets the current record's "template_item_id" value
 * @method Public_Collection_Item   setProvenanceDescription()                     Sets the current record's "provenance_description" value
 * @method Public_Collection_Item   setLicense()                                   Sets the current record's "license" value
 * @method Public_Collection_Item   setCopyrightText()                             Sets the current record's "copyright_text" value
 * @method Public_Collection_Item   setSideBarText()                               Sets the current record's "side_bar_text" value
 * @method Public_Collection_Item   setWorkflowStep1()                             Sets the current record's "workflow_step_1" value
 * @method Public_Collection_Item   setWorkflowStep2()                             Sets the current record's "workflow_step_2" value
 * @method Public_Collection_Item   setWorkflowStep3()                             Sets the current record's "workflow_step_3" value
 * @method Public_Collection_Item   setSubmitter()                                 Sets the current record's "submitter" value
 * @method Public_Collection_Item   setAdmin()                                     Sets the current record's "admin" value
 * @method Public_Collection_Item   setPublicBitstreamItem()                       Sets the current record's "Public_Bitstream_Item" value
 * @method Public_Collection_Item   setPublicItemItem()                            Sets the current record's "Public_Item_Item" value
 * @method Public_Collection_Item   setPublicEpersongroupItemForWorkflowStep1()    Sets the current record's "Public_Epersongroup_Item_ForWorkflowStep1" value
 * @method Public_Collection_Item   setPublicEpersongroupItemForWorkflowStep2()    Sets the current record's "Public_Epersongroup_Item_ForWorkflowStep2" value
 * @method Public_Collection_Item   setPublicEpersongroupItemForWorkflowStep3()    Sets the current record's "Public_Epersongroup_Item_ForWorkflowStep3" value
 * @method Public_Collection_Item   setPublicEpersongroupItemForAdmin()            Sets the current record's "Public_Epersongroup_Item_ForAdmin" value
 * @method Public_Collection_Item   setPublicEpersongroupItemForSubmitter()        Sets the current record's "Public_Epersongroup_Item_ForSubmitter" value
 * @method Public_Collection_Item   setPublicSubscriptionItems()                   Sets the current record's "Public_Subscription_Items" collection
 * @method Public_Collection_Item   setPublicCommunity2collectionItems()           Sets the current record's "Public_Community2collection_Items" collection
 * @method Public_Collection_Item   setPublicCollection2itemItems()                Sets the current record's "Public_Collection2item_Items" collection
 * @method Public_Collection_Item   setPublicCollectionItemCountItems()            Sets the current record's "Public_CollectionItemCount_Items" collection
 * @method Public_Collection_Item   setPublicWorkflowitemItems()                   Sets the current record's "Public_Workflowitem_Items" collection
 * @method Public_Collection_Item   setPublicHarvestedCollectionItems()            Sets the current record's "Public_HarvestedCollection_Items" collection
 * @method Public_Collection_Item   setPublicWorkspaceitemItems()                  Sets the current record's "Public_Workspaceitem_Items" collection
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_Collection_Item extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.collection');
        $this->hasColumn('collection_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('short_description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('introductory_text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('logo_bitstream_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('template_item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('provenance_description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('license', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('copyright_text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('side_bar_text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('workflow_step_1', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('workflow_step_2', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('workflow_step_3', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('submitter', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('admin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Public_Bitstream_Item', array(
             'local' => 'logo_bitstream_id',
             'foreign' => 'bitstream_id'));

        $this->hasOne('Public_Item_Item', array(
             'local' => 'template_item_id',
             'foreign' => 'item_id'));

        $this->hasOne('Public_Epersongroup_Item as Public_Epersongroup_Item_ForWorkflowStep1', array(
             'local' => 'workflow_step_1',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Public_Epersongroup_Item as Public_Epersongroup_Item_ForWorkflowStep2', array(
             'local' => 'workflow_step_2',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Public_Epersongroup_Item as Public_Epersongroup_Item_ForWorkflowStep3', array(
             'local' => 'workflow_step_3',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Public_Epersongroup_Item as Public_Epersongroup_Item_ForAdmin', array(
             'local' => 'admin',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Public_Epersongroup_Item as Public_Epersongroup_Item_ForSubmitter', array(
             'local' => 'submitter',
             'foreign' => 'eperson_group_id'));

        $this->hasMany('Public_Subscription_Item as Public_Subscription_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_Community2collection_Item as Public_Community2collection_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_Collection2item_Item as Public_Collection2item_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_CollectionItemCount_Item as Public_CollectionItemCount_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_Workflowitem_Item as Public_Workflowitem_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_HarvestedCollection_Item as Public_HarvestedCollection_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Public_Workspaceitem_Item as Public_Workspaceitem_Items', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));
    }
}