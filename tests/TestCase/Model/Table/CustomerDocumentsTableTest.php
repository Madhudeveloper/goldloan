<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerDocumentsTable Test Case
 */
class CustomerDocumentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerDocumentsTable
     */
    public $CustomerDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CustomerDocuments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CustomerDocuments') ? [] : ['className' => CustomerDocumentsTable::class];
        $this->CustomerDocuments = TableRegistry::getTableLocator()->get('CustomerDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerDocuments);

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
