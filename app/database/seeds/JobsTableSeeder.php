<?php

use Psyao\Occupations\CompanyRepository;
use Psyao\Occupations\Job;
use Psyao\Occupations\JobRepository;

class JobsTableSeeder extends Seeder
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
        DB::table('jobs')->truncate();

        $companies = Config::get('psyao.companies');

        foreach ($companies as $company)
        {
            $currentCompany = $this->companyRepository->getByName($company['name']);

            foreach ($company['jobs'] as $job)
            {
                $this->jobRepository->save(
                    Job::practice(
                        $job['title'],
                        $job['from'],
                        $job['to'],
                        $job['description']
                    ),
                    $currentCompany->id
                );

                if($currentCompany->from == null || $job['from']->lt($currentCompany->from))
                {
                    $currentCompany->from = $job['from'];
                }

                if($currentCompany->to == null || $job['to']->gt($currentCompany->to))
                {
                    $currentCompany->to = $job['to'];
                }

                if($currentCompany->isDirty())
                {
                    $currentCompany->save();
                }
            }
        }
    }

}
