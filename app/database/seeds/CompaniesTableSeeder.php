<?php

use Psyao\Occupations\Company;
use Psyao\Occupations\CompanyRepository;
use Psyao\Occupations\Job;
use Psyao\Occupations\JobRepository;

class CompaniesTableSeeder extends Seeder
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepository;
    /**
     * @var JobRepository
     */
    protected $jobRepository;

    function __construct(CompanyRepository $companyRepository, JobRepository $jobRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->jobRepository = $jobRepository;
    }

    public function run()
    {
        DB::table('companies')->truncate();

        $companies = Config::get('psyao.companies');

        foreach ($companies as $company)
        {
            $this->companyRepository->save(
                Company::enrole(
                    $company['name'],
                    $company['location'],
                    $company['featured']
                )
            );
        }
    }

}
