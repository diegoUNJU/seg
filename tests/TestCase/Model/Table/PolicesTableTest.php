<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PolicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PolicesTable Test Case
 */
class PolicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PolicesTable
     */
    public $Polices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.polices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Polices') ? [] : ['className' => 'App\Model\Table\PolicesTable'];
        $this->Polices = TableRegistry::get('Polices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Polices);

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
