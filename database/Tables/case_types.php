<?php

/**
 * @package Database Table Case_types
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Case_types, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Case_types
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('casetypeid');
        $schema->string('case_type');
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
        $option->rename('case_types'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // get case types
            $caseTypes = fdb()->get("default.cases type")->results();

            // load all
            foreach ($caseTypes as $type) $db->insert(['case_type' => $type]);
        }
    }
}