<?php

/**
 * @package Database Table Accounts
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Accounts, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Accounts
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('accountid');
        $schema->string('firstname');
        $schema->string('lastname');
        $schema->string('email', 300);
        $schema->string('telephone')->null();
        $schema->string('gender', 50)->null();
        $schema->int('accounttypeid');
        $schema->string('display_image')->null();
        $schema->tinyint('verified')->default(0);
        $schema->bigint('addedby')->default(0);
        // and more.. 
    }

    // drop table
    public function down($drop, $record)
    {
        // $record carries table rows if exists.
        // execute drop table command
        $drop();
    }

    // options
    public function option($option)
    {
        $option->rename('accounts'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status)
    {
        if ($status == 'waiting' || $status == 'complete')
        {
            // do some cool stuffs.
            // $this->table => for ORM operations to this table.
        }
    }
}