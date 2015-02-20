<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MembersController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MembersController Test Case
 */
class MembersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Members' => 'app.members',
        'People' => 'app.people',
        'Users' => 'app.users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get("/Members?page=1");
        $this->assertResponseOk();
        $this->assertResponseContains("VIP001");
        $this->assertResponseContains("COM001");
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get("/members/view/1");
        $this->assertResponseOk();
        $this->assertContentType("text/html");
        $this->assertResponseContains("VIP001");
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $data = [
            'person_id' => 3,
            'member_number' => 'VIP002',
            'member_since' => '2012-02-19',
            'created' => '2014-12-29 00:16:55',
            'updated' => '2014-12-29 00:16:55',
            'person' => [
                'user_id' => 4,
                'name' => 'Jason Derek',
                'gender' => 'Lorem ipsum dolor sit ame',
                'birth_date' => '2014-12-29',
                'cpf' => '918.172.601-98',
                'rg' => '1231121311120',
                'orgao_expedidor' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'number' => 'Lorem ipsum dolor sit amet',
                'complement' => 'Lorem ipsum dolor sit amet',
                'cep' => 'Lorem ipsum dolor sit amet'
            ]
        ];

        $this->post("/members/add", $data);
        $this->assertResponseSuccess();

        $members = TableRegistry::get("Members");
        $this->assertEquals(3, $members->find("all")->count());
        $query = $members->find()->where(['member_number'=> $data['member_number']]);
        $this->assertEquals(1, $query->count());
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {

    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
