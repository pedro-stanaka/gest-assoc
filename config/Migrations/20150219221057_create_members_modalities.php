<?php

use Phinx\Migration\AbstractMigration;

class CreateMembersModalities extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->table("members_modalities")
            ->addColumn("member_id", "integer", ['null'=>false])
            ->addColumn("modality_id", "integer")
            ->addColumn("created", "datetime")
            ->addColumn("modified", "datetime")
            ->save();
        $this->table("members_modalities")
            ->addForeignKey("member_id", "members", "id", ["delete"=>"RESTRICT", "update"=>"CASCADE"])
            ->addForeignKey("modality_id", "modalities", "id", ["delete"=>"RESTRICT", "update"=>"CASCADE"]);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        if ( $this->table("members_modalities")->exists() ) {
            $this->dropTable("members_modalities");
        }
    }
}