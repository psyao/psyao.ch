<?php namespace Psyao\Resume;

use Eloquent;

/**
 * Class Institute
 *
 * @package Psyao\Resume
 */
class Institute extends Eloquent
{
    /**
     * A institute has one or many jobs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('Psyao\Resume\Course')->orderby('from', 'desc');
    }

    /**
     * Join a new institute.
     *
     * @param string $name
     * @param string $location
     *
     * @return static
     */
    public static function enrole($name, $location)
    {
        $institute = new static(compact('name', 'location'));

        return $institute;
    }
}
