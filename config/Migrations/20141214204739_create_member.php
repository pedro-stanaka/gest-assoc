<?php

use Phinx\Migration\AbstractMigration;

class CreateMember extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $members = $this->table('members');
        $members->addColumn('person_id', 'integer')
            ->addColumn('member_number', 'string')
            ->addColumn('member_since', 'date')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
            ->addIndex('person_id', ['unique' => true])
            ->save();
        $this->table('members')
            ->addForeignKey('person_id', 'people', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
            ->save();
    }

    /**
     * Migrate Down.

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}