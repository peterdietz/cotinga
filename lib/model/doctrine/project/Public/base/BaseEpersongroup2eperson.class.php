<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Epersongroup2eperson', 'doctrine');

/**
 * BaseEpersongroup2eperson
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $eperson_group_id
 * @property integer $eperson_id
 * @property Epersongroup $Epersongroup
 * @property Eperson $Eperson
 * 
 * @method integer              getId()               Returns the current record's "id" value
 * @method integer              getEpersonGroupId()   Returns the current record's "eperson_group_id" value
 * @method integer              getEpersonId()        Returns the current record's "eperson_id" value
 * @method Epersongroup         getEpersongroup()     Returns the current record's "Epersongroup" value
 * @method Eperson              getEperson()          Returns the current record's "Eperson" value
 * @method Epersongroup2eperson setId()               Sets the current record's "id" value
 * @method Epersongroup2eperson setEpersonGroupId()   Sets the current record's "eperson_group_id" value
 * @method Epersongroup2eperson setEpersonId()        Sets the current record's "eperson_id" value
 * @method Epersongroup2eperson setEpersongroup()     Sets the current record's "Epersongroup" value
 * @method Epersongroup2eperson setEperson()          Sets the current record's "Eperson" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEpersongroup2eperson extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.epersongroup2eperson');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('eperson_group_id', 'integer', 4, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Epersongroup', array(
             'local' => 'eperson_group_id',
             'foreign' => 'eperson_group_id'));

        $this->hasOne('Eperson', array(
             'local' => 'eperson_id',
             'foreign' => 'eperson_id'));
    }
}