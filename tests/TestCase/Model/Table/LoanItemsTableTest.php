<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoanItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoanItemsTable Test Case
 */
class LoanItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LoanItemsTable
     */
    public $LoanItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LoanItems',
        'app.Loans',
        'app.Types',
        'app.Qualities',
        'app.Containers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LoanItems') ? [] : ['className' => LoanItemsTable::class];
        $this->LoanItems = TableRegistry::getTableLocator()->get('LoanItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LoanItems);

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
