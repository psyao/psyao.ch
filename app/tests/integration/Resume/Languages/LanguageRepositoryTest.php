<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\Languages\LanguageRepository;

class LanguageRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var LanguageRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new LanguageRepository;
    }

    /** @test */
    public function it_saves_a_language()
    {
        // Given
        $language = TestDummy::build('Psyao\Resume\Languages\Language', ['name' => 'Foobar']);

        // When
        $this->repo->save($language);

        // Then
        $this->tester->seeRecord('languages', ['name' => 'Foobar']);
    }

    /** @test */
    public function it_gets_all_languages()
    {
        // Given
        TestDummy::times(5)->create('Psyao\Resume\Languages\Language');

        // When
        $results = $this->repo->getAll();

        // Then
        $this->assertCount(5, $results);
    }
}