<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QualityAmountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QualityAmountsTable Test Case
 */
class QualityAmountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QualityAmountsTable
     */
    public $QualityAmounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.QualityAmounts',
        'app.Qualities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('QualityAmounts') ? [] : ['className' => QualityAmountsTable::class];
        $this->QualityAmounts = TableRegistry::getTableLocator()->get('QualityAmounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QualityAmounts);

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
