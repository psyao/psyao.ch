<?php

use Psyao\Resume\Company;
use Psyao\Resume\CompanyRepository;
use Psyao\Resume\Job;
use Psyao\Resume\JobRepository;

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
                $this->saveJob($job, $currentCompany->id);

                $this->updateCompanyDates($currentCompany, $job);
            }
        }
    }

    /**
     * @param array   $job
     * @param integer $companyId
     */
    private function saveJob(array $job, $companyId)
    {
        $this->jobRepository->save(
            Job::practice(
                $job['title'],
                $job['from'],
                $job['to'],
                $job['description']
            ),
            $companyId
        );
    }

    /**
     * @param Company $company
     * @param array   $job
     */
    private function updateCompanyDates(Company $company, array $job)
    {
        if ($company->from == null || $job['from']->lt($company->from))
        {
            $company->from = $job['from'];
        }

        if ($company->to == null || $job['to']->gt($company->to))
        {
            $company->to = $job['to'];
        }

        if ($company->isDirty())
        {
            $company->save();
        }

        return;
    }

}
