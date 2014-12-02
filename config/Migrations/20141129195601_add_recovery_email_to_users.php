<?php

use Phinx\Migration\AbstractMigration;

class AddRecoveryEmailToUsers extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up() {

        if($this->hasTable('users')) {
            $this->table('users')
                ->addColumn('recovery_email', 'string')
                ->save();
        }
    
    }

    /**
     * Migrate Down.
     */
    public function down() {
        if ($this->hasTable('users') && $this->table('users')->hasColumn('recovery_email')) {
            $this->table('users')->removeColumn('recovery_email')->save();
        }
    }
}