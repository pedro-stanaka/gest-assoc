<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modality Entity.
 */
class Modality extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'members' => true,
    ];
}
