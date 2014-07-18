<?php namespace Psyao\Resume;

use Carbon\Carbon;

/**
 * Class CompanyRepository
 *
 * @package Psyao\Resume
 */
class CompanyRepository
{
    /**
     * @var Company
     */
    protected $company;

    /**
     * @param Company $company
     */
    function __construct(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Get
     *
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function getByName($name)
    {
        return $this->company
            ->whereName($name)
            ->first();
    }

    /**
     * Get all the companies.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->company
            ->where('from', '<=', Carbon::now())
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