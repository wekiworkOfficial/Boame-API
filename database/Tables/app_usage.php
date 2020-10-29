<?php

/**
 * @package Database Table App_usage
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table App_usage, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class App_usage
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('app_usageid');
        $schema->int('year');
        $schema->int('month');
        $schema->int('weekid')->comment('from 1 to 5')->default(1);
        $schema->int('monday');
        $schema->int('tuesday');
        $schema->int('wednesday');
        $schema->int('thursday');
        $schema->int('friday');
        $schema->int('saturday');
        $schema->int('sunday');
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
        $option->rename('app_usage'); // rename table
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