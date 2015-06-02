<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProjectsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProjectsController Test Case
 */
class ProjectsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.projects',
        'app.project_statuses',
        'app.quotes',
        'app.customers',
        'app.addresses',
        'app.provinces',
        'app.countries',
        'app.contacts',
        'app.contact_types',
        'app.tickets',
        'app.ticket_types',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.notification_types',
        'app.customer_notes',
        'app.messages',
        'app.project_tasks',
        'app.ticket_events',
        'app.ticket_event_types',
        'app.billing_types',
        'app.time_types',
        'app.ticket_history',
        'app.customer_sites',
        'app.billing_statuses',
        'app.emails',
        'app.email_types',
        'app.phone_numbers',
        'app.phone_types',
        'app.billing_plans',
        'app.billing_plan_lines',
        'app.quote_types'
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
