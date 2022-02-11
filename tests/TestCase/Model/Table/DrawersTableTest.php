<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrawersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrawersTable Test Case
 */
class DrawersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DrawersTable
     */
    public $Drawers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Drawers',
        'app.DrawerAmounts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Drawers') ? [] : ['className' => DrawersTable::class];
        $this->Drawers = TableRegistry::getTableLocator()->get('Drawers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Drawers);

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
