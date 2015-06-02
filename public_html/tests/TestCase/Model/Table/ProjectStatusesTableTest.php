<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectStatusesTable Test Case
 */
class ProjectStatusesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_statuses',
        'app.projects',
        'app.quotes',
        'app.project_tasks',
        'app.users',
        'app.user_roles',
        'app.notifications',
        'app.notification_types',
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
        'app.customer_sites',
        'app.billing_statuses',
        'app.ticket_events',
        'app.ticket_history',
        'app.emails',
        'app.email_types',
        'app.phone_numbers',
        'app.phone_types',
        'app.billing_plans',
        'app.billing_plan_lines',
        'app.time_types',
        'app.customer_notes',
        'app.messages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProjectStatuses') ? [] : ['className' => 'App\Model\Table\ProjectStatusesTable'];
        $this->ProjectStatuses = TableRegistry::get('ProjectStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectStatuses);

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
