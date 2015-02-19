<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 * @property PeopleTable $People
 */
class MembersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('members');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('People', [
            'alias' => 'People',
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
            ->add('person_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('member_number', 'create')
            ->notEmpty('member_number')
            ->add('member_since', 'valid', ['rule' => 'date', 'message'=> __("The value must be a date.")])
            ->requirePresence('member_since', 'create')
            ->notEmpty('member_since');

        return $validator;
    }
}
