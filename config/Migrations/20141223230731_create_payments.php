<?php

use Phinx\Migration\AbstractMigration;

class CreatePayments extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->table('payments')
            ->addColumn('value', 'decimal', ['precision'=>10, 'scale'=>2])
            ->addColumn('payment_date', 'date')
            ->addColumn('payment_type_id', 'integer')
            ->addColumn('payment_method_id', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
            ->save();

        $this->table('payments')
            ->addForeignKey('payment_type_id', 'payment_types', 'id', ['delete'=>'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('payment_method_id', 'payment_methods', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('payments');
    }
}