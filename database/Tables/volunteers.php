<?php

/**
 * @package Database Table Volunteers
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Volunteers, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Volunteers
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('volunteerid');
        $schema->bigint('accountid');
        $schema->int('volunteerpositionid');
        $schema->string('residential_address');
        $schema->text('cv_address');
        $schema->longtext('biography');
        $schema->string('date_created');
        $schema->tinyint('approved')->default(0);
        $schema->string('date_approved');
        $schema->bigint('approved_by');
        $schema->longtext('comment');
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
        $option->rename('volunteers'); // rename table
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