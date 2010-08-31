<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Metadataschemaregistry', 'doctrine');

/**
 * BaseMetadataschemaregistry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $metadata_schema_id
 * @property string $namespace
 * @property string $short_id
 * @property Doctrine_Collection $Metadatafieldregistrys
 * 
 * @method integer                getMetadataSchemaId()       Returns the current record's "metadata_schema_id" value
 * @method string                 getNamespace()              Returns the current record's "namespace" value
 * @method string                 getShortId()                Returns the current record's "short_id" value
 * @method Doctrine_Collection    getMetadatafieldregistrys() Returns the current record's "Metadatafieldregistrys" collection
 * @method Metadataschemaregistry setMetadataSchemaId()       Sets the current record's "metadata_schema_id" value
 * @method Metadataschemaregistry setNamespace()              Sets the current record's "namespace" value
 * @method Metadataschemaregistry setShortId()                Sets the current record's "short_id" value
 * @method Metadataschemaregistry setMetadatafieldregistrys() Sets the current record's "Metadatafieldregistrys" collection
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMetadataschemaregistry extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.metadataschemaregistry');
        $this->hasColumn('metadata_schema_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('namespace', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('short_id', 'string', null, array(
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
        $this->hasMany('Metadatafieldregistry as Metadatafieldregistrys', array(
             'local' => 'metadata_schema_id',
             'foreign' => 'metadata_schema_id'));
    }
}