<?php namespace Psyao\Resume;

use Eloquent;

/**
 * Class Company
 *
 * @package Psyao\Resume
 */
class Company extends Eloquent
{
    /**
     * A company has one or many jobs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobs()
    {
        return $this->hasMany('Psyao\Resume\Job')->orderby('from', 'desc');
    }

    /**
     * Join a new company.
     *
     * @param string  $name
     * @param string  $location
     * @param boolean $featured
     *
     * @return static
     */
    public static function enrole($name, $location, $featured = false)
    {
        $company = new static(compact('name', 'location', 'featured'));

        return $company;
    }
}
