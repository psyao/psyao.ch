<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\CourseRepository;

class CourseRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var CourseRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new CourseRepository;
    }

    /** @test */
    public function it_saves_a_course_for_an_institute()
    {
        // Given
        $course = TestDummy::build(
            'Psyao\Resume\Course',
            [
                'institute_id' => null,
                'title'      => 'Foobar'
            ]
        );

        $institute = TestDummy::create('Psyao\Resume\Institute');

        // When
        $this->repo->save($course, $institute->id);

        // Then
        $this->tester->seeRecord(
            'courses',
            [
                'institute_id' => $institute->id,
                'title'      => 'Foobar'
            ]
        );
    }
}