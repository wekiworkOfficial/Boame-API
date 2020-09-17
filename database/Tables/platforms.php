<?php

/**
 * @package Database Table Platforms
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Platforms, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Platforms
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('platformid');
        $schema->string('platform_name');
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
        $option->rename('platforms'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // all platforms
            $platforms = fdb()->get('default.platforms')->results();

            // add to platform 
            foreach ($platforms as $platform) $db->insert(['platform_name' => $platform]);
        }
    }
}