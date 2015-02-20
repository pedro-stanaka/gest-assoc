<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembersModalitiesFixture
 *
 */
class MembersModalitiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'member_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modality_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'member_id' => 1,
            'modality_id' => 1,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 2,
            'member_id' => 2,
            'modality_id' => 2,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 3,
            'member_id' => 3,
            'modality_id' => 3,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 4,
            'member_id' => 4,
            'modality_id' => 4,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 5,
            'member_id' => 5,
            'modality_id' => 5,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 6,
            'member_id' => 6,
            'modality_id' => 6,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 7,
            'member_id' => 7,
            'modality_id' => 7,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 8,
            'member_id' => 8,
            'modality_id' => 8,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 9,
            'member_id' => 9,
            'modality_id' => 9,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
        [
            'id' => 10,
            'member_id' => 10,
            'modality_id' => 10,
            'created' => '2015-02-20 01:14:57',
            'modified' => '2015-02-20 01:14:57'
        ],
    ];
}
