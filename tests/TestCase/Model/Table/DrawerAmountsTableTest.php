<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrawerAmountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrawerAmountsTable Test Case
 */
class DrawerAmountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DrawerAmountsTable
     */
    public $DrawerAmounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DrawerAmounts',
        'app.Drawers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DrawerAmounts') ? [] : ['className' => DrawerAmountsTable::class];
        $this->DrawerAmounts = TableRegistry::getTableLocator()->get('DrawerAmounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DrawerAmounts);

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
