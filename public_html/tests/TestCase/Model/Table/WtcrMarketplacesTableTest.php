<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WtcrMarketplacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WtcrMarketplacesTable Test Case
 */
class WtcrMarketplacesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wtcr_marketplaces',
        'app.wtcr_marketplace_templates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WtcrMarketplaces') ? [] : ['className' => 'App\Model\Table\WtcrMarketplacesTable'];
        $this->WtcrMarketplaces = TableRegistry::get('WtcrMarketplaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WtcrMarketplaces);

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
