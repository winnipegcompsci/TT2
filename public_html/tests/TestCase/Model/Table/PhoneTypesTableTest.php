<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhoneTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhoneTypesTable Test Case
 */
class PhoneTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.phone_types',
        'app.phone_numbers',
        'app.addresses',
        'app.provinces',
        'app.countries',
        'app.contacts',
        'app.customers',
        'app.billing_plans',
        'app.billing_plan_lines',
        'app.time_types',
        'app.customer_notes',
        'app.customer_sites',
        'app.tickets',
        'app.ticket_types',
        'app.service_types',
        'app.ticket_priorities',
        'app.ticket_statuses',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.notification_types',
        'app.messages',
        'app.project_tasks',
        'app.projects',
        'app.project_statuses',
        'app.quotes',
        'app.ticket_events',
        'app.ticket_history',
        'app.billing_statuses',
        'app.contact_types',
        'app.emails',
        'app.email_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PhoneTypes') ? [] : ['className' => 'App\Model\Table\PhoneTypesTable'];
        $this->PhoneTypes = TableRegistry::get('PhoneTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PhoneTypes);

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
