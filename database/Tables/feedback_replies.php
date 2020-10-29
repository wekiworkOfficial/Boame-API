<?php

/**
 * @package Database Table Feedback_replies
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Feedback_replies, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Feedback_replies
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('feedbackreplyid');
        $schema->bigint('feedbackid');
        $schema->bigint('accountid');
        $schema->string('device_hash')->null();
        $schema->text('feedback');
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
        $option->rename('feedback_replies'); // rename table
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