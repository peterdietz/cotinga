<?php


class Epersongroup2epersonTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Epersongroup2eperson');
    }
}