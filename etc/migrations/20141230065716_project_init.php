<?php

use Phinx\Migration\AbstractMigration;

class ProjectInit extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', array('limit' => 20))
            ->addColumn('password', 'string', array('limit' => 40))
            ->addColumn('email', 'string', array('limit' => 100))
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', array('null' => true))
            ->addIndex(array('username', 'email'), array('unique' => true))
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('users');

        $table->drop();
    }
}