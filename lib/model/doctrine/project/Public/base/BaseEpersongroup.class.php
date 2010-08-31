<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Epersongroup', 'doctrine');

/**
 * BaseEpersongroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $eperson_group_id
 * @property string $name
 * @property Doctrine_Collection $Group2groups_ForChild
 * @property Doctrine_Collection $Group2groups_ForParent
 * @property Doctrine_Collection $Collections_ForWorkflowStep1
 * @property Doctrine_Collection $Collections_ForWorkflowStep2
 * @property Doctrine_Collection $Collections_ForWorkflowStep3
 * @property Doctrine_Collection $Collections_ForAdmin
 * @property Doctrine_Collection $Collections_ForSubmitter
 * @property Doctrine_Collection $Resourcepolicys
 * @property Doctrine_Collection $Group2groupcaches_ForChild
 * @property Doctrine_Collection $Group2groupcaches_ForParent
 * @property Doctrine_Collection $Communitys
 * @property Doctrine_Collection $Epersongroup2epersons
 * 
 * @method integer             getEpersonGroupId()               Returns the current record's "eperson_group_id" value
 * @method string              getName()                         Returns the current record's "name" value
 * @method Doctrine_Collection getGroup2groupsForChild()         Returns the current record's "Group2groups_ForChild" collection
 * @method Doctrine_Collection getGroup2groupsForParent()        Returns the current record's "Group2groups_ForParent" collection
 * @method Doctrine_Collection getCollectionsForWorkflowStep1()  Returns the current record's "Collections_ForWorkflowStep1" collection
 * @method Doctrine_Collection getCollectionsForWorkflowStep2()  Returns the current record's "Collections_ForWorkflowStep2" collection
 * @method Doctrine_Collection getCollectionsForWorkflowStep3()  Returns the current record's "Collections_ForWorkflowStep3" collection
 * @method Doctrine_Collection getCollectionsForAdmin()          Returns the current record's "Collections_ForAdmin" collection
 * @method Doctrine_Collection getCollectionsForSubmitter()      Returns the current record's "Collections_ForSubmitter" collection
 * @method Doctrine_Collection getResourcepolicys()              Returns the current record's "Resourcepolicys" collection
 * @method Doctrine_Collection getGroup2groupcachesForChild()    Returns the current record's "Group2groupcaches_ForChild" collection
 * @method Doctrine_Collection getGroup2groupcachesForParent()   Returns the current record's "Group2groupcaches_ForParent" collection
 * @method Doctrine_Collection getCommunitys()                   Returns the current record's "Communitys" collection
 * @method Doctrine_Collection getEpersongroup2epersons()        Returns the current record's "Epersongroup2epersons" collection
 * @method Epersongroup        setEpersonGroupId()               Sets the current record's "eperson_group_id" value
 * @method Epersongroup        setName()                         Sets the current record's "name" value
 * @method Epersongroup        setGroup2groupsForChild()         Sets the current record's "Group2groups_ForChild" collection
 * @method Epersongroup        setGroup2groupsForParent()        Sets the current record's "Group2groups_ForParent" collection
 * @method Epersongroup        setCollectionsForWorkflowStep1()  Sets the current record's "Collections_ForWorkflowStep1" collection
 * @method Epersongroup        setCollectionsForWorkflowStep2()  Sets the current record's "Collections_ForWorkflowStep2" collection
 * @method Epersongroup        setCollectionsForWorkflowStep3()  Sets the current record's "Collections_ForWorkflowStep3" collection
 * @method Epersongroup        setCollectionsForAdmin()          Sets the current record's "Collections_ForAdmin" collection
 * @method Epersongroup        setCollectionsForSubmitter()      Sets the current record's "Collections_ForSubmitter" collection
 * @method Epersongroup        setResourcepolicys()              Sets the current record's "Resourcepolicys" collection
 * @method Epersongroup        setGroup2groupcachesForChild()    Sets the current record's "Group2groupcaches_ForChild" collection
 * @method Epersongroup        setGroup2groupcachesForParent()   Sets the current record's "Group2groupcaches_ForParent" collection
 * @method Epersongroup        setCommunitys()                   Sets the current record's "Communitys" collection
 * @method Epersongroup        setEpersongroup2epersons()        Sets the current record's "Epersongroup2epersons" collection
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEpersongroup extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.epersongroup');
        $this->hasColumn('eperson_group_id', 'integer', 4, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Group2group as Group2groups_ForChild', array(
             'local' => 'eperson_group_id',
             'foreign' => 'child_id'));

        $this->hasMany('Group2group as Group2groups_ForParent', array(
             'local' => 'eperson_group_id',
             'foreign' => 'parent_id'));

        $this->hasMany('Collection as Collections_ForWorkflowStep1', array(
             'local' => 'eperson_group_id',
             'foreign' => 'workflow_step_1'));

        $this->hasMany('Collection as Collections_ForWorkflowStep2', array(
             'local' => 'eperson_group_id',
             'foreign' => 'workflow_step_2'));

        $this->hasMany('Collection as Collections_ForWorkflowStep3', array(
             'local' => 'eperson_group_id',
             'foreign' => 'workflow_step_3'));

        $this->hasMany('Collection as Collections_ForAdmin', array(
             'local' => 'eperson_group_id',
             'foreign' => 'admin'));

        $this->hasMany('Collection as Collections_ForSubmitter', array(
             'local' => 'eperson_group_id',
             'foreign' => 'submitter'));

        $this->hasMany('Resourcepolicy as Resourcepolicys', array(
             'local' => 'eperson_group_id',
             'foreign' => 'epersongroup_id'));

        $this->hasMany('Group2groupcache as Group2groupcaches_ForChild', array(
             'local' => 'eperson_group_id',
             'foreign' => 'child_id'));

        $this->hasMany('Group2groupcache as Group2groupcaches_ForParent', array(
             'local' => 'eperson_group_id',
             'foreign' => 'parent_id'));

        $this->hasMany('Community as Communitys', array(
             'local' => 'eperson_group_id',
             'foreign' => 'admin'));

        $this->hasMany('Epersongroup2eperson as Epersongroup2epersons', array(
             'local' => 'eperson_group_id',
             'foreign' => 'eperson_group_id'));
    }
}