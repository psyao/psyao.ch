<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\Educations\InstituteRepository;

class InstituteRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var InstituteRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new InstituteRepository;
    }

    /** @test */
    public function it_saves_a_institute()
    {
        // Given
        $institute = TestDummy::build('Psyao\Resume\Educations\Institute', ['name' => 'Foobar']);

        // When
        $this->repo->save($institute);

        // Then
        $this->tester->seeRecord('institutes', ['name' => 'Foobar']);
    }

    /** @test */
    public function it_gets_all_institutes()
    {
        // Given
        TestDummy::times(5)->create('Psyao\Resume\Educations\Institute');

        // When
        $results = $this->repo->getAll();

        // Then
        $this->assertCount(5, $results);
    }

    /** @test */
    public function it_gets_a_institute_by_its_name()
    {
        // Given
        TestDummy::create('Psyao\Resume\Educations\Institute', ['name' => 'Foobar']);

        // When
        /** @var Psyao\Resume\Educations\Institute $institute */
        $institute = $this->repo->getByName('Foobar');

        // Then
        $this->assertEquals('Foobar', $institute->name);
    }

}