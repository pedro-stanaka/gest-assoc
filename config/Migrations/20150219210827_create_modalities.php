<?php

use Phinx\Migration\AbstractMigration;

class CreateModalities extends AbstractMigration
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
        $this->table("modalities")
            ->addColumn("name", "string", ['null'=>false])
            ->addColumn("description", "text", ['null'=>true])
            ->addColumn("created", "datetime")
            ->addColumn("modified", "datetime")
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        if ($this->table("modalities")->exists())  $this->dropTable("modalities");
    }
}