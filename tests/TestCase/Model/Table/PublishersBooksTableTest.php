<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublishersBooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublishersBooksTable Test Case
 */
class PublishersBooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PublishersBooksTable
     */
    public $PublishersBooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.publishers_books',
        'app.books',
        'app.authors',
        'app.authors_books',
        'app.categories',
        'app.books_categories',
        'app.publishers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PublishersBooks') ? [] : ['className' => 'App\Model\Table\PublishersBooksTable'];
        $this->PublishersBooks = TableRegistry::get('PublishersBooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PublishersBooks);

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
