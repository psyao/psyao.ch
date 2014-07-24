<?php namespace Psyao\Resume\Occupations;

/**
 * Class JobRepository
 *
 * @package Psyao\Resume
 */
class JobRepository
{
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
        return Company::findOrFail($companyId)
            ->jobs()
            ->save($job);
    }
} 