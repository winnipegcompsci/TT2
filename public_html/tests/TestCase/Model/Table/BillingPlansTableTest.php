<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillingPlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillingPlansTable Test Case
 */
class BillingPlansTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.billing_plans',
        'app.billing_plan_lines',
        'app.time_types',
        'app.customers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BillingPlans') ? [] : ['className' => 'App\Model\Table\BillingPlansTable'];
        $this->BillingPlans = TableRegistry::get('BillingPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillingPlans);

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
