<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Public_Resourcepolicy_Item', 'doctrine');

/**
 * BasePublic_Resourcepolicy_Item
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $policy_id
 * @property integer $resource_type_id
 * @property integer $resource_id
 * @property integer $action_id
 * @property integer $eperson_id
 * @property integer $epersongroup_id
 * @property date $start_date
 * @property date $end_date
 * @property Public_Eperson_Item $Public_Eperson_Item
 * @property Public_Epersongroup_Item $Public_Epersongroup_Item
 * 
 * @method integer                    getPolicyId()                 Returns the current record's "policy_id" value
 * @method integer                    getResourceTypeId()           Returns the current record's "resource_type_id" value
 * @method integer                    getResourceId()               Returns the current record's "resource_id" value
 * @method integer                    getActionId()                 Returns the current record's "action_id" value
 * @method integer                    getEpersonId()                Returns the current record's "eperson_id" value
 * @method integer                    getEpersongroupId()           Returns the current record's "epersongroup_id" value
 * @method date                       getStartDate()                Returns the current record's "start_date" value
 * @method date                       getEndDate()                  Returns the current record's "end_date" value
 * @method Public_Eperson_Item        getPublicEpersonItem()        Returns the current record's "Public_Eperson_Item" value
 * @method Public_Epersongroup_Item   getPublicEpersongroupItem()   Returns the current record's "Public_Epersongroup_Item" value
 * @method Public_Resourcepolicy_Item setPolicyId()                 Sets the current record's "policy_id" value
 * @method Public_Resourcepolicy_Item setResourceTypeId()           Sets the current record's "resource_type_id" value
 * @method Public_Resourcepolicy_Item setResourceId()               Sets the current record's "resource_id" value
 * @method Public_Resourcepolicy_Item setActionId()                 Sets the current record's "action_id" value
 * @method Public_Resourcepolicy_Item setEpersonId()                Sets the current record's "eperson_id" value
 * @method Public_Resourcepolicy_Item setEpersongroupId()           Sets the current record's "epersongroup_id" value
 * @method Public_Resourcepolicy_Item setStartDate()                Sets the current record's "start_date" value
 * @method Public_Resourcepolicy_Item setEndDate()                  Sets the current record's "end_date" value
 * @method Public_Resourcepolicy_Item setPublicEpersonItem()        Sets the current record's "Public_Eperson_Item" value
 * @method Public_Resourcepolicy_Item setPublicEpersongroupItem()   Sets the current record's "Public_Epersongroup_Item" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePublic_Resourcepolicy_Item extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.resourcepolicy');
        $this->hasColumn('policy_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('resource_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('resource_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('action_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('eperson_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('epersongroup_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('start_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Public_Eperson_Item', array(
             'local' => 'eperson_id',
             'foreign' => 'eperson_id'));

        $this->hasOne('Public_Epersongroup_Item', array(
             'local' => 'epersongroup_id',
             'foreign' => 'eperson_group_id'));
    }
}