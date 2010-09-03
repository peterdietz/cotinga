<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Collection', 'doctrine');

/**
 * BaseCollection
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
 * @property Bitstream $LogoBitstream
 * @property Item $TemplateItem
 * @property Epersongroup $Epersongroup_ForWorkflowStep1
 * @property Epersongroup $Epersongroup_ForWorkflowStep2
 * @property Epersongroup $Epersongroup_ForWorkflowStep3
 * @property Epersongroup $Epersongroup_ForAdmin
 * @property Epersongroup $Epersongroup_ForSubmitter
 * @property Doctrine_Collection $Subscriptions
 * @property Doctrine_Collection $Communities
 * @property Doctrine_Collection $CollectionItemCounts
 * @property Doctrine_Collection $Workflowitems
 * @property Doctrine_Collection $HarvestedCollections
 * @property Doctrine_Collection $Workspaceitems
 * @property Doctrine_Collection $Items
 * @property Doctrine_Collection $Collection2item
 * @property Doctrine_Collection $Community2collection
 * 
 * @method integer             getCollectionId()                  Returns the current record's "collection_id" value
 * @method string              getName()                          Returns the current record's "name" value
 * @method string              getShortDescription()              Returns the current record's "short_description" value
 * @method string              getIntroductoryText()              Returns the current record's "introductory_text" value
 * @method integer             getLogoBitstreamId()               Returns the current record's "logo_bitstream_id" value
 * @method integer             getTemplateItemId()                Returns the current record's "template_item_id" value
 * @method string              getProvenanceDescription()         Returns the current record's "provenance_description" value
 * @method string              getLicense()                       Returns the current record's "license" value
 * @method string              getCopyrightText()                 Returns the current record's "copyright_text" value
 * @method string              getSideBarText()                   Returns the current record's "side_bar_text" value
 * @method integer             getWorkflowStep1()                 Returns the current record's "workflow_step_1" value
 * @method integer             getWorkflowStep2()                 Returns the current record's "workflow_step_2" value
 * @method integer             getWorkflowStep3()                 Returns the current record's "workflow_step_3" value
 * @method integer             getSubmitter()                     Returns the current record's "submitter" value
 * @method integer             getAdmin()                         Returns the current record's "admin" value
 * @method Bitstream           getLogoBitstream()                 Returns the current record's "LogoBitstream" value
 * @method Item                getTemplateItem()                  Returns the current record's "TemplateItem" value
 * @method Epersongroup        getEpersongroupForWorkflowStep1()  Returns the current record's "Epersongroup_ForWorkflowStep1" value
 * @method Epersongroup        getEpersongroupForWorkflowStep2()  Returns the current record's "Epersongroup_ForWorkflowStep2" value
 * @method Epersongroup        getEpersongroupForWorkflowStep3()  Returns the current record's "Epersongroup_ForWorkflowStep3" value
 * @method Epersongroup        getEpersongroupForAdmin()          Returns the current record's "Epersongroup_ForAdmin" value
 * @method Epersongroup        getEpersongroupForSubmitter()      Returns the current record's "Epersongroup_ForSubmitter" value
 * @method Doctrine_Collection getSubscriptions()                 Returns the current record's "Subscriptions" collection
 * @method Doctrine_Collection getCommunities()                   Returns the current record's "Communities" collection
 * @method Doctrine_Collection getCollectionItemCounts()          Returns the current record's "CollectionItemCounts" collection
 * @method Doctrine_Collection getWorkflowitems()                 Returns the current record's "Workflowitems" collection
 * @method Doctrine_Collection getHarvestedCollections()          Returns the current record's "HarvestedCollections" collection
 * @method Doctrine_Collection getWorkspaceitems()                Returns the current record's "Workspaceitems" collection
 * @method Doctrine_Collection getItems()                         Returns the current record's "Items" collection
 * @method Doctrine_Collection getCollection2item()               Returns the current record's "Collection2item" collection
 * @method Doctrine_Collection getCommunity2collection()          Returns the current record's "Community2collection" collection
 * @method Collection          setCollectionId()                  Sets the current record's "collection_id" value
 * @method Collection          setName()                          Sets the current record's "name" value
 * @method Collection          setShortDescription()              Sets the current record's "short_description" value
 * @method Collection          setIntroductoryText()              Sets the current record's "introductory_text" value
 * @method Collection          setLogoBitstreamId()               Sets the current record's "logo_bitstream_id" value
 * @method Collection          setTemplateItemId()                Sets the current record's "template_item_id" value
 * @method Collection          setProvenanceDescription()         Sets the current record's "provenance_description" value
 * @method Collection          setLicense()                       Sets the current record's "license" value
 * @method Collection          setCopyrightText()                 Sets the current record's "copyright_text" value
 * @method Collection          setSideBarText()                   Sets the current record's "side_bar_text" value
 * @method Collection          setWorkflowStep1()                 Sets the current record's "workflow_step_1" value
 * @method Collection          setWorkflowStep2()                 Sets the current record's "workflow_step_2" value
 * @method Collection          setWorkflowStep3()                 Sets the current record's "workflow_step_3" value
 * @method Collection          setSubmitter()                     Sets the current record's "submitter" value
 * @method Collection          setAdmin()                         Sets the current record's "admin" value
 * @method Collection          setLogoBitstream()                 Sets the current record's "LogoBitstream" value
 * @method Collection          setTemplateItem()                  Sets the current record's "TemplateItem" value
 * @method Collection          setEpersongroupForWorkflowStep1()  Sets the current record's "Epersongroup_ForWorkflowStep1" value
 * @method Collection          setEpersongroupForWorkflowStep2()  Sets the current record's "Epersongroup_ForWorkflowStep2" value
 * @method Collection          setEpersongroupForWorkflowStep3()  Sets the current record's "Epersongroup_ForWorkflowStep3" value
 * @method Collection          setEpersongroupForAdmin()          Sets the current record's "Epersongroup_ForAdmin" value
 * @method Collection          setEpersongroupForSubmitter()      Sets the current record's "Epersongroup_ForSubmitter" value
 * @method Collection          setSubscriptions()                 Sets the current record's "Subscriptions" collection
 * @method Collection          setCommunities()                   Sets the current record's "Communities" collection
 * @method Collection          setCollectionItemCounts()          Sets the current record's "CollectionItemCounts" collection
 * @method Collection          setWorkflowitems()                 Sets the current record's "Workflowitems" collection
 * @method Collection          setHarvestedCollections()          Sets the current record's "HarvestedCollections" collection
 * @method Collection          setWorkspaceitems()                Sets the current record's "Workspaceitems" collection
 * @method Collection          setItems()                         Sets the current record's "Items" collection
 * @method Collection          setCollection2item()               Sets the current record's "Collection2item" collection
 * @method Collection          setCommunity2collection()          Sets the current record's "Community2collection" collection
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCollection extends BaseDoctrineRecord
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
        $this->hasOne('Bitstream as LogoBitstream', array(
             'local' => 'logo_bitstream_id',
             'foreign' => 'bitstream_id'));

        $this->hasOne('Item as TemplateItem', array(
             'local' => 'template_item_id',
             'foreign' => 'item_id'));

        $this->hasOne('Epersongroup as Epersongroup_ForWorkflowStep1', array(
             'local' => 'workflow_step_1',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Epersongroup as Epersongroup_ForWorkflowStep2', array(
             'local' => 'workflow_step_2',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Epersongroup as Epersongroup_ForWorkflowStep3', array(
             'local' => 'workflow_step_3',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Epersongroup as Epersongroup_ForAdmin', array(
             'local' => 'admin',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Epersongroup as Epersongroup_ForSubmitter', array(
             'local' => 'submitter',
             'foreign' => 'eperson_group_id'));

        $this->hasMany('Subscription as Subscriptions', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Community as Communities', array(
             'refClass' => 'Community2collection',
             'local' => 'collection_id',
             'foreign' => 'community_id'));

        $this->hasMany('CollectionItemCount as CollectionItemCounts', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Workflowitem as Workflowitems', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('HarvestedCollection as HarvestedCollections', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Workspaceitem as Workspaceitems', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Item as Items', array(
             'refClass' => 'Collection2item',
             'local' => 'collection_id',
             'foreign' => 'item_id'));

        $this->hasMany('Collection2item', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasMany('Community2collection', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));
    }
}