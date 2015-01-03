<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity.
 */
class Person extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'gender' => true,
        'birth_date' => true,
        'cpf' => true,
        'rg' => true,
        'orgao_expedidor' => true,
        'address' => true,
        'number' => true,
        'complement' => true,
        'cep' => true,
        'user' => true,
        'members' => true,
    ];
}
