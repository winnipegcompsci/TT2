<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ServiceTypesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ServiceTypesController Test Case
 */
class ServiceTypesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_types',
        'app.tickets',
        'app.customers',
        'app.addresses',
        'app.provinces',
        'app.countries',
        'app.contacts',
        'app.contact_types',
        'app.emails',
        'app.email_types',
        'app.phone_numbers',
        'app.phone_types',
        'app.billing_plans',
        'app.billing_plan_lines',
        'app.time_types',
        'app.customer_notes',
        'app.customer_sites',
        'app.quotes',
        'app.quote_types',
        'app.projects',
        'app.project_statuses',
        'app.project_tasks',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.notification_types',
        'app.messages',
        'app.ticket_events',
        'app.ticket_history',
        'app.ticket_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
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
