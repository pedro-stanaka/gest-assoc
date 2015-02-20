<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeopleFixture
 *
 */
class PeopleFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'gender' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'birth_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cpf' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'rg' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'orgao_expedidor' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'address' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'number' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'complement' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cpf' => ['type' => 'unique', 'columns' => ['cpf'], 'length' => []],
            'rg' => ['type' => 'unique', 'columns' => ['rg', 'orgao_expedidor'], 'length' => []],
            'user_id' => ['type' => 'unique', 'columns' => ['user_id'], 'length' => []],
            'people_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
        ],
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'name' => 'Maria Vergara',
            'gender' => 'Lorem ipsum dolor sit ame',
            'birth_date' => '2014-12-29',
            'cpf' => '918.918.182-98',
            'rg' => '12315151231',
            'orgao_expedidor' => 'Lorem ipsum dolor sit amet',
            'address' => 'Lorem ipsum dolor sit amet',
            'number' => 'Lorem ipsum dolor sit amet',
            'complement' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ipsum dolor sit amet'
        ],
        [
            'id' => 2,
            'user_id' => 2,
            'name' => 'Jason Lean',
            'gender' => 'Lorem ipsum dolor sit ame',
            'birth_date' => '2014-12-29',
            'cpf' => '918.918.789-98',
            'rg' => '123112312',
            'orgao_expedidor' => 'Lorem ipsum dolor sit amet',
            'address' => 'Lorem ipsum dolor sit amet',
            'number' => 'Lorem ipsum dolor sit amet',
            'complement' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ipsum dolor sit amet'
        ],
        [
            'id' => 3,
            'user_id' => 3,
            'name' => 'Jason Derek',
            'gender' => 'Lorem ipsum dolor sit ame',
            'birth_date' => '2014-12-29',
            'cpf' => '918.177.789-98',
            'rg' => '12311231230',
            'orgao_expedidor' => 'Lorem ipsum dolor sit amet',
            'address' => 'Lorem ipsum dolor sit amet',
            'number' => 'Lorem ipsum dolor sit amet',
            'complement' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
