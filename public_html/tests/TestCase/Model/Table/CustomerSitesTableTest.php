<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerSitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerSitesTable Test Case
 */
class CustomerSitesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customer_sites',
        'app.customers',
        'app.tickets',
        'app.contacts',
        'app.addresses',
        'app.provinces',
        'app.countries',
        'app.emails',
        'app.phone_numbers',
        'app.contact_types',
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
        $config = TableRegistry::exists('CustomerSites') ? [] : ['className' => 'App\Model\Table\CustomerSitesTable'];
        $this->CustomerSites = TableRegistry::get('CustomerSites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerSites);

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
