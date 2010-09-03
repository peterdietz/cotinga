<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Collection2item', 'doctrine');

/**
 * BaseCollection2item
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $collection_id
 * @property integer $item_id
 * @property Collection $Collection
 * @property Item $Item
 * 
 * @method integer         getId()            Returns the current record's "id" value
 * @method integer         getCollectionId()  Returns the current record's "collection_id" value
 * @method integer         getItemId()        Returns the current record's "item_id" value
 * @method Collection      getCollection()    Returns the current record's "Collection" value
 * @method Item            getItem()          Returns the current record's "Item" value
 * @method Collection2item setId()            Sets the current record's "id" value
 * @method Collection2item setCollectionId()  Sets the current record's "collection_id" value
 * @method Collection2item setItemId()        Sets the current record's "item_id" value
 * @method Collection2item setCollection()    Sets the current record's "Collection" value
 * @method Collection2item setItem()          Sets the current record's "Item" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCollection2item extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.collection2item');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
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
        $this->hasColumn('item_id', 'integer', 4, array(
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
        $this->hasOne('Collection', array(
             'local' => 'collection_id',
             'foreign' => 'collection_id'));

        $this->hasOne('Item', array(
             'local' => 'item_id',
             'foreign' => 'item_id'));
    }
}