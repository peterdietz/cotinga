<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Handle', 'doctrine');

/**
 * BaseHandle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $handle_id
 * @property string $handle
 * @property integer $resource_type_id
 * @property integer $resource_id
 * 
 * @method integer getHandleId()         Returns the current record's "handle_id" value
 * @method string  getHandle()           Returns the current record's "handle" value
 * @method integer getResourceTypeId()   Returns the current record's "resource_type_id" value
 * @method integer getResourceId()       Returns the current record's "resource_id" value
 * @method Handle  setHandleId()         Sets the current record's "handle_id" value
 * @method Handle  setHandle()           Sets the current record's "handle" value
 * @method Handle  setResourceTypeId()   Sets the current record's "resource_type_id" value
 * @method Handle  setResourceId()       Sets the current record's "resource_id" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHandle extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.handle');
        $this->hasColumn('handle_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('handle', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}