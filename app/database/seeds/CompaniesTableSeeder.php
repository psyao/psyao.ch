<?php

use Psyao\Resume\Company;
use Psyao\Resume\CompanyRepository;

class CompaniesTableSeeder extends Seeder
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepository;

    function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function run()
    {
        DB::table('companies')->truncate();

        $companies = Config::get('psyao.companies');

        foreach ($companies as $company)
        {
            $this->saveCompany($company);
        }
    }

    /**
     * @param array $company
     */
    private function saveCompany(array $company)
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
