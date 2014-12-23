<?php

use Phinx\Migration\AbstractMigration;

class CreateDepartment extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->table('departments')
            ->addColumn('name', 'string')
            ->addColumn('description', 'text')
            ->addColumn('manager_id', 'integer')
            ->save();

        $this->table('departments')
            ->addForeignKey('manager_id', 'members', 'id', ['delete'=>'RESTRICT', 'update' => 'CASCADE'])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('departments');
    }
}