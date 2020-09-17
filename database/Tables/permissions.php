<?php

/**
 * @package Database Table Permissions
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Permissions, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Permissions
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('permissionid');
        $schema->string('permission_name');
        $schema->string('privilege');
        $schema->int('platformid');
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
        $option->rename('permissions'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // get permissions
            $permissions = fdb()->get('default.permissions')->results();

            // get data
            foreach ($permissions->data as $permission_name => $privilege) :
                
                // add to database
                $db->insert([
                    'permission_name' => $permission_name,
                    'privilege' => $privilege,
                    'platformid' => $permissions->platforms->{$permission_name}
                ]);

            endforeach;
        }
    }
}