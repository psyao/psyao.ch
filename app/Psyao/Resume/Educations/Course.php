<?php namespace Psyao\Resume\Educations;

use Carbon\Carbon;
use Eloquent;

/**
 * Class Course
 *
 * @package Psyao\Resume
 */
class Course extends Eloquent
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['from', 'to'];

    /**
     * A course belongs to a company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function institute()
    {
        return $this->belongsTo('Psyao\Resume\Educations\Institute');
    }

    /**
     * Follow a new course.
     *
     * @param string $title
     * @param string $domain
     * @param Carbon $from
     * @param Carbon $to
     * @param null   $diploma
     *
     * @return static
     */
    public static function follow($title, $domain, Carbon $from, Carbon $to = null, $diploma = null)
    {
        return new static(compact('title', 'domain', 'from', 'to', 'diploma'));
    }
}
