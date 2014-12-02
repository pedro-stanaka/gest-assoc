<?php

use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', ['limit' => 60])
            ->addColumn('password', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
            ->addIndex('username', ['unique'=>true])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        if ($this->hasTable('users')) {
            $this->dropTable('users');
        }
    }
}
