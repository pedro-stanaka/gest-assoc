<?php

use Phinx\Migration\AbstractMigration;

class DropDepartments extends AbstractMigration
{

    public function change()
    {
        if ( $this->table("departments")->exists() ) {
            $this->dropTable("departments");
        }
    }

}