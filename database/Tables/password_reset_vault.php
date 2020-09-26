<?php

/**
 * @package Database Table Password_reset_vault
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Password_reset_vault, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Password_reset_vault
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('password_reset_vaultid');
        $schema->bigint('accountid');
        $schema->string('password');
        $schema->string('password_salt');
        $schema->string('reset_code');
        $schema->string('date_created');
        $schema->string('expire_date');
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
        $option->rename('password_reset_vault'); // rename table
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