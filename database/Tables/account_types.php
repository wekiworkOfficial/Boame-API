<?php

/**
 * @package Database Table Account_types
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Account_types, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Account_types
{
    // connection identifier
    public $connectionIdentifier = '';

    // create table structure
    public function up($schema)
    {
        $schema->increment('accounttypeid');
        $schema->string('account_type');
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
        $option->rename('account_types'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // get account types
            $accountTypes = fdb()->get('default.account types')->results();

            // add now
            foreach ($accountTypes as $type) $db->insert(['account_type' => $type]);
        }
    }
}