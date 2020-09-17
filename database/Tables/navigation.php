<?php

/**
 * @package Database Table Navigation
 * @author Amadi ifeanyi <amadiify.com>
 * 
 * This class provides an handler for Database table Navigation, it can work with any database system,
 * it creates a table, drops a table, alters a table structure and does more. 
 * with the assist manager you can run migration and do more with this package.
 */
class Navigation
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up($schema)
    {
        $schema->increment('navigationid');
        $schema->string('nav_name');
        $schema->string('nav_tag');
        $schema->int('accounttypeid');
        $schema->string('permissionid');
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
        $option->rename('navigation'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // read navigation data
            $navigation = fdb()->get('default.navigation')->results();

            // get the platform id
            foreach ($navigation as $platformid => $nav) :

                // get the id
                $platformid = preg_replace('/[^0-9]/', '', $platformid);

                // get the account type id
                foreach ($nav as $accounttypeid => $navArray) :

                    // get the accounttypeid
                    $accounttypeid = preg_replace('/[^0-9]/', '', $accounttypeid);

                    // read the nav array
                    foreach ($navArray as $entry) :

                        // add record
                        $db->insert([
                            'nav_name' => $entry->name,
                            'nav_tag' => $entry->tag,
                            'accounttypeid' => $accounttypeid,
                            'permissionid' => $entry->permissionid,
                            'platformid' => $platformid
                        ]);

                    endforeach;

                endforeach;

            endforeach;
        }
    }
}