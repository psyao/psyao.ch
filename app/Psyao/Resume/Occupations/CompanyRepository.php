<?php namespace Psyao\Resume\Occupations;

use Carbon\Carbon;

/**
 * Class CompanyRepository
 *
 * @package Psyao\Resume
 */
class CompanyRepository
{
    /**
     * Get
     *
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function getByName($name)
    {
        return Company::whereName($name)
            ->first();
    }

    /**
     * Get all the companies.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return Company::where('from', '<=', Carbon::now())
            ->with('jobs')
            ->orderBy('featured', 'desc')
            ->orderBy('from', 'desc')
            ->get();
    }

    /**
     * Persist a new company.
     *
     * @param Company $company
     *
     * @return mixed
     */
    public function save(Company $company)
    {
        return $company->save();
    }
} 