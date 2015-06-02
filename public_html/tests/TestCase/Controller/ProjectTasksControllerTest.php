<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProjectTasksController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProjectTasksController Test Case
 */
class ProjectTasksControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
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
