<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CountriesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CountriesController Test Case
 */
class CountriesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.countries',
        'app.addresses',
        'app.provinces',
        'app.contacts',
        'app.customers',
        'app.contact_types',
        'app.tickets',
        'app.ticket_types',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.customer_notes',
        'app.messages',
        'app.project_tasks',
        'app.projects',
        'app.project_statuses',
        'app.quotes',
        'app.ticket_events',
        'app.ticket_history',
        'app.customer_sites',
        'app.billing_statuses',
        'app.emails',
        'app.phone_numbers'
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
