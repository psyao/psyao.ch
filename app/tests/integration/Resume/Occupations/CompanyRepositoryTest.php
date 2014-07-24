<?php

use Laracasts\TestDummy\Factory as TestDummy;
use Psyao\Resume\Occupations\CompanyRepository;

class CompanyRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var CompanyRepository
     */
    protected $repo;

    protected function _before()
    {
        $this->repo = new CompanyRepository;
    }

    /** @test */
    public function it_saves_a_company()
    {
        // Given
        $company = TestDummy::build(
            'Psyao\Resume\Occupations\Company',
            [
                'name'     => 'Foobar',
                'featured' => true
            ]
        );

        // When
        $this->repo->save($company);

        // Then
        $this->tester->seeRecord(
            'companies',
            [
                'name'     => 'Foobar',
                'featured' => true
            ]
        );
    }

    /** @test */
    public function it_gets_all_companies()
    {
        // Given
        TestDummy::times(5)->create('Psyao\Resume\Occupations\Company');

        // When
        $results = $this->repo->getAll();

        // Then
        $this->assertCount(5, $results);
    }

    /** @test */
    public function it_gets_a_company_by_its_name()
    {
        // Given
        TestDummy::create('Psyao\Resume\Occupations\Company', ['name' => 'Foobar']);

        // When
        /** @var Psyao\Resume\Occupations\Company $company */
        $company = $this->repo->getByName('Foobar');

        // Then
        $this->assertEquals('Foobar', $company->name);
    }

}