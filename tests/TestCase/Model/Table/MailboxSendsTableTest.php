<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailboxSendsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailboxSendsTable Test Case
 */
class MailboxSendsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailboxSendsTable
     */
    public $MailboxSends;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mailbox_sends',
        'app.messages',
        'app.users',
        'app.boxes',
        'app.payments',
        'app.clients',
        'app.immovables',
        'app.policies',
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
        $config = TableRegistry::exists('MailboxSends') ? [] : ['className' => 'App\Model\Table\MailboxSendsTable'];
        $this->MailboxSends = TableRegistry::get('MailboxSends', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MailboxSends);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
