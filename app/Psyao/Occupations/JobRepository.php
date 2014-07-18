<?php namespace Psyao\Occupations;

/**
 * Class JobRepository
 *
 * @package Psyao\Occupations
 */
class JobRepository
{
    /**
     * @var Company
     */
    protected $company;

    function __construct(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Persist a new job.
     *
     * @param Job     $job
     * @param integer $companyId
     *
     * @return mixed
     */
    public function save(Job $job, $companyId)
    {
        return $this->company->findOrFail($companyId)
            ->jobs()
            ->save($job);
    }
} 