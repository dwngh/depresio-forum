<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThreadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThreadsTable Test Case
 */
class ThreadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ThreadsTable
     */
    protected $Threads;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Threads',
        'app.Users',
        'app.Posts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Threads') ? [] : ['className' => ThreadsTable::class];
        $this->Threads = $this->getTableLocator()->get('Threads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Threads);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ThreadsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ThreadsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
