<?php

use Phinx\Migration\AbstractMigration;

class CreatePaymentMethods extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->table('payment_methods')
            ->addColumn('name', 'string')
            ->addColumn('icon', 'string')
            ->addColumn('icon_path', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('payment_methods');
    }
}