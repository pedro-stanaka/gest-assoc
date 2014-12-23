<?php

use Phinx\Migration\AbstractMigration;

class CreatePaymentTypes extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->table('payment_types')
            ->addColumn('name','string')
            ->addColumn('description', 'text')
            ->addColumn('amount_months', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('payment_types');
    }
}