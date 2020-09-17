<?php

/**
 * @package Database Table Cases_reported
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Cases_reported, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Cases_reported
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('casesreportedid');
        $schema->int('casetypeid');
        $schema->string('devicehash');
        $schema->bigint('accountid')->default(0)->comment('if zero, then user is anonnymus');
        $schema->bigint('assigned_to')->default(0);
        $schema->longtext('case_text');
        $schema->string('date_created');
        $schema->string('date_modified');
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
        $option->rename('cases_reported'); // rename table
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