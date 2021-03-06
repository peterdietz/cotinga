<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CommunityItemCount', 'doctrine');

/**
 * BaseCommunityItemCount
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $community_id
 * @property integer $count
 * @property Community $Community
 * 
 * @method integer            getCommunityId()  Returns the current record's "community_id" value
 * @method integer            getCount()        Returns the current record's "count" value
 * @method Community          getCommunity()    Returns the current record's "Community" value
 * @method CommunityItemCount setCommunityId()  Sets the current record's "community_id" value
 * @method CommunityItemCount setCount()        Sets the current record's "count" value
 * @method CommunityItemCount setCommunity()    Sets the current record's "Community" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommunityItemCount extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.community_item_count');
        $this->hasColumn('community_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('count', 'integer', 4, array(
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
        $this->hasOne('Community', array(
             'local' => 'community_id',
             'foreign' => 'community_id'));
    }
}