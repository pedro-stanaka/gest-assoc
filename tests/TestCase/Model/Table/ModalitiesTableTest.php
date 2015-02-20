<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModalitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModalitiesTable Test Case
 */
class ModalitiesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Modalities' => 'app.modalities',
        'Members' => 'app.members',
        'People' => 'app.people',
        'Users' => 'app.users',
        'MembersModalities' => 'app.members_modalities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Modalities') ? [] : ['className' => 'App\Model\Table\ModalitiesTable'];
        $this->Modalities = TableRegistry::get('Modalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Modalities);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
