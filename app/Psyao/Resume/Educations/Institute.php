<?php namespace Psyao\Resume\Educations;

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
        return $this->hasMany('Psyao\Resume\Educations\Course')->orderby('from', 'desc');
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
