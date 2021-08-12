<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OperadorasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OperadorasTable Test Case
 */
class OperadorasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OperadorasTable
     */
    protected $Operadoras;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Operadoras',
        'app.Telefones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Operadoras') ? [] : ['className' => OperadorasTable::class];
        $this->Operadoras = $this->getTableLocator()->get('Operadoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Operadoras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OperadorasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
