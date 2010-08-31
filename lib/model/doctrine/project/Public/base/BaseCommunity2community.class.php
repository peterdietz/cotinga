<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Community2community', 'doctrine');

/**
 * BaseCommunity2community
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $parent_comm_id
 * @property integer $child_comm_id
 * @property Community $Community_ForParentComm
 * @property Community $Community_ForChildComm
 * 
 * @method integer             getId()                      Returns the current record's "id" value
 * @method integer             getParentCommId()            Returns the current record's "parent_comm_id" value
 * @method integer             getChildCommId()             Returns the current record's "child_comm_id" value
 * @method Community           getCommunityForParentComm()  Returns the current record's "Community_ForParentComm" value
 * @method Community           getCommunityForChildComm()   Returns the current record's "Community_ForChildComm" value
 * @method Community2community setId()                      Sets the current record's "id" value
 * @method Community2community setParentCommId()            Sets the current record's "parent_comm_id" value
 * @method Community2community setChildCommId()             Sets the current record's "child_comm_id" value
 * @method Community2community setCommunityForParentComm()  Sets the current record's "Community_ForParentComm" value
 * @method Community2community setCommunityForChildComm()   Sets the current record's "Community_ForChildComm" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommunity2community extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.community2community');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('parent_comm_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('child_comm_id', 'integer', 4, array(
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
        $this->hasOne('Community as Community_ForParentComm', array(
             'local' => 'parent_comm_id',
             'foreign' => 'community_id'));

        $this->hasOne('Community as Community_ForChildComm', array(
             'local' => 'child_comm_id',
             'foreign' => 'community_id'));
    }
}