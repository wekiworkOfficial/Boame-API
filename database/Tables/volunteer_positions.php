<?php

/**
 * @package Database Table Volunteer_positions
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Volunteer_positions, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Volunteer_positions
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('volunteerpositionid');
        $schema->string('volunteerposition');
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
        $option->rename('volunteer_positions'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // load positions
            $positions = fdb()->get('default.volunteer positions')->results();

            // add to table
            foreach ($positions as $position) $db->insert(['volunteerposition' => $position]);
        }
    }
}