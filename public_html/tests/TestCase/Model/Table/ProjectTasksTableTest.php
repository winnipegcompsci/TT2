<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectTasksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectTasksTable Test Case
 */
class ProjectTasksTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_tasks',
        'app.projects',
        'app.project_statuses',
        'app.quotes',
        'app.tickets',
        'app.customers',
        'app.contacts',
        'app.ticket_types',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.customer_notes',
        'app.messages',
        'app.ticket_events',
        'app.ticket_history',
        'app.customer_sites',
        'app.billing_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectTasks') ? [] : ['className' => 'App\Model\Table\ProjectTasksTable'];
        $this->ProjectTasks = TableRegistry::get('ProjectTasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectTasks);

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
