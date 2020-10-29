<?php

/**
 * @package Database Table Chatconnection
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Chatconnection, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Chatconnection
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('chatlistid');
        $schema->string('accountid');
        $schema->string('accountid2');
        $schema->int('allowed')->default(1);
        $schema->longtext('conversation');
        $schema->int('unread')->default(0);
        $schema->string('lastreplied');
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
        $option->rename('chatconnection'); // rename table
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