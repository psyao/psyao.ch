<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\Skills\SkillRepository;

class SkillRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var SkillRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new SkillRepository;
    }

    /** @test */
    public function it_saves_a_skill()
    {
        // Given
        $skill = TestDummy::build('Psyao\Resume\Skills\Skill', ['name' => 'Foobar']);

        // When
        $this->repo->save($skill);

        // Then
        $this->tester->seeRecord('skills', ['name' => 'Foobar']);
    }

    /** @test */
    public function it_gets_all_skills()
    {
        // Given
        TestDummy::times(5)->create('Psyao\Resume\Skills\Skill');

        // When
        $results = $this->repo->getAll();

        // Then
        $this->assertCount(5, $results);
    }
}