<?php

/**
 * @package Database Table Authentication
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Authentication, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Authentication
{
    // connection identifier
    public $connectionIdentifier = '';
    

    // create table structure
    public function up($schema)
    {
        $schema->increment('authenticationid');
        $schema->bigint('accountid');
        $schema->text('token');
        $schema->string('last_seen');
        $schema->string('date_created');
        $schema->int('isonline')->default(0);
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
        $option->rename('authentication'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status)
    {
        if ($status == 'complete')
        {
            
        }
    }
}