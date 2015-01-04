<?php

use Phinx\Migration\AbstractMigration;

class CreatePeople extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up() {
        $this->table('people')
            ->addColumn('user_id', 'integer', ['null'=>true])
            ->addColumn('name', 'string')
            ->addColumn('gender', 'char', ['limit' => 1])
            ->addColumn('birth_date', 'date')
            ->addColumn('cpf', 'string')
            ->addColumn('rg', 'string')
            ->addColumn('orgao_expedidor', 'string')
            ->addColumn('address', 'string')
            ->addColumn('number', 'string')
            ->addColumn('complement', 'string', ['null'=>true])
            ->addColumn('cep', 'string', ['null'=>true])
            ->addIndex(['cpf'], ['unique'=>true])
            ->addIndex(['rg', 'orgao_expedidor'], ['unique'=>true])
            ->addIndex('user_id', ['unique'=>true])
            ->save();

        $this->table('people')
            ->addForeignKey('user_id', 'users', 'id', ['delete'=>'SET_NULL', 'update'=>'CASCADE'])
            ->save();

    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        if($this->hasTable('people')) {
            $this->table('people')
                ->dropForeignKey('user_id')->save();
            $this->dropTable('people');
        }
    }
}