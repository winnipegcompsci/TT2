<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketEventsTable Test Case
 */
class TicketEventsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticket_events',
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
        'app.ticket_history',
        'app.ticket_types',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
        'app.billing_statuses',
        'app.ticket_event_types',
        'app.billing_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TicketEvents') ? [] : ['className' => 'App\Model\Table\TicketEventsTable'];
        $this->TicketEvents = TableRegistry::get('TicketEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketEvents);

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
