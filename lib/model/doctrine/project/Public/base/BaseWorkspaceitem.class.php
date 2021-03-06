<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Workspaceitem', 'doctrine');

/**
 * BaseWorkspaceitem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $workspace_item_id
 * @property integer $item_id
 * @property integer $collection_id
 * @property boolean $multiple_titles
 * @property boolean $published_before
 * @property boolean $multiple_files
 * @property integer $stage_reached
 * @property integer $page_reached
 * @property Item $Item
 * @property Collection $Collection
 * 
 * @method integer       getWorkspaceItemId()   Returns the current record's "workspace_item_id" value
 * @method integer       getItemId()            Returns the current record's "item_id" value
 * @method integer       getCollectionId()      Returns the current record's "collection_id" value
 * @method boolean       getMultipleTitles()    Returns the current record's "multiple_titles" value
 * @method boolean       getPublishedBefore()   Returns the current record's "published_before" value
 * @method boolean       getMultipleFiles()     Returns the current record's "multiple_files" value
 * @method integer       getStageReached()      Returns the current record's "stage_reached" value
 * @method integer       getPageReached()       Returns the current record's "page_reached" value
 * @method Item          getItem()              Returns the current record's "Item" value
 * @method Collection    getCollection()        Returns the current record's "Collection" value
 * @method Workspaceitem setWorkspaceItemId()   Sets the current record's "workspace_item_id" value
 * @method Workspaceitem setItemId()            Sets the current record's "item_id" value
 * @method Workspaceitem setCollectionId()      Sets the current record's "collection_id" value
 * @method Workspaceitem setMultipleTitles()    Sets the current record's "multiple_titles" value
 * @method Workspaceitem setPublishedBefore()   Sets the current record's "published_before" value
 * @method Workspaceitem setMultipleFiles()     Sets the current record's "multiple_files" value
 * @method Workspaceitem setStageReached()      Sets the current record's "stage_reached" value
 * @method Workspaceitem setPageReached()       Sets the current record's "page_reached" value
 * @method Workspaceitem setItem()              Sets the current record's "Item" value
 * @method Workspaceitem setCollection()        Sets the current record's "Collection" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWorkspaceitem extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.workspaceitem');
        $this->hasColumn('workspace_item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('item_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('collection_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('multiple_titles', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('published_before', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('multiple_files', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('stage_reached', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('page_reached', 'integer', 4, array(
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
        $this->hasOne('Item', array(
             'local' => 'item_id',
             'foreign' => 'item_id'));

        $this->hasOne('Collection', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));
    }
}