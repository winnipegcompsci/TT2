<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketTypesTable Test Case
 */
class TicketTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_types',
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
        'app.ticket_event_types',
        'app.billing_types',
        'app.ticket_history',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
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
        $config = TableRegistry::exists('TicketTypes') ? [] : ['className' => 'App\Model\Table\TicketTypesTable'];
        $this->TicketTypes = TableRegistry::get('TicketTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketTypes);

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
