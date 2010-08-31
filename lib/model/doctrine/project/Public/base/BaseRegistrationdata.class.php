<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Registrationdata', 'doctrine');

/**
 * BaseRegistrationdata
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $registrationdata_id
 * @property string $email
 * @property string $token
 * @property timestamp $expires
 * 
 * @method integer          getRegistrationdataId()  Returns the current record's "registrationdata_id" value
 * @method string           getEmail()               Returns the current record's "email" value
 * @method string           getToken()               Returns the current record's "token" value
 * @method timestamp        getExpires()             Returns the current record's "expires" value
 * @method Registrationdata setRegistrationdataId()  Sets the current record's "registrationdata_id" value
 * @method Registrationdata setEmail()               Sets the current record's "email" value
 * @method Registrationdata setToken()               Sets the current record's "token" value
 * @method Registrationdata setExpires()             Sets the current record's "expires" value
 * 
 * @package    dspace
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistrationdata extends BaseDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('public.registrationdata');
        $this->hasColumn('registrationdata_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('token', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('expires', 'timestamp', 25, array(
             'type' => 'timestamp',
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
        
    }
}