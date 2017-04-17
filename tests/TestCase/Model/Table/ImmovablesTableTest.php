<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImmovablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImmovablesTable Test Case
 */
class ImmovablesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImmovablesTable
     */
    public $Immovables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.immovables',
        'app.clients',
        'app.payments',
        'app.boxes',
        'app.users',
        'app.mailbox_sends',
        'app.messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Immovables') ? [] : ['className' => 'App\Model\Table\ImmovablesTable'];
        $this->Immovables = TableRegistry::get('Immovables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Immovables);

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
