<?php

/**
 * @package Database Table Feedbacks
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Feedbacks, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Feedbacks
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('feedbackid');
        $schema->bigint('accountid')->default(0)->comment('if zero then user is annonymus');
        $schema->string('devicehash');
        $schema->string('fullname')->null()->comment('should be autofilled if user is loggedin');
        $schema->string('email')->null()->comment('should be autofilled if user is loggedin');
        $schema->longtext('feedback');
        $schema->string('date_created');
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
        $option->rename('feedbacks'); // rename table
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