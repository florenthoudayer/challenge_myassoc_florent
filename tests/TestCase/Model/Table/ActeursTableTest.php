<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActeursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActeursTable Test Case
 */
class ActeursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActeursTable
     */
    public $Acteurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acteurs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Acteurs') ? [] : ['className' => ActeursTable::class];
        $this->Acteurs = TableRegistry::get('Acteurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acteurs);

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
}
