<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\JobRepository;

class JobRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var JobRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new JobRepository;
    }

    /** @test */
    public function it_saves_a_job_for_a_company()
    {
        // Given
        $job = TestDummy::build(
            'Psyao\Resume\Job',
            [
                'company_id' => null,
                'title'      => 'Foobar'
            ]
        );

        $company = TestDummy::create('Psyao\Resume\Company');

        // When
        $this->repo->save($job, $company->id);

        // Then
        $this->tester->seeRecord(
            'jobs',
            [
                'company_id' => $company->id,
                'title'      => 'Foobar'
            ]
        );
    }
}