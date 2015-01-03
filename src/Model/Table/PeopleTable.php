<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 */
class PeopleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('people');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Users', [
            'alias' => 'Users',
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Members', [
            'alias' => 'Members',
            'foreignKey' => 'person_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator instance
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('user_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('user_id')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender')
            ->add('birth_date', 'valid', ['rule' => 'date'])
            ->requirePresence('birth_date', 'create')
            ->notEmpty('birth_date')
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf')
            ->requirePresence('rg', 'create')
            ->notEmpty('rg')
            ->requirePresence('orgao_expedidor', 'create')
            ->notEmpty('orgao_expedidor')
            ->requirePresence('address', 'create')
            ->notEmpty('address')
            ->requirePresence('number', 'create')
            ->notEmpty('number')
            ->allowEmpty('complement')
            ->allowEmpty('cep');

        return $validator;
    }
}
