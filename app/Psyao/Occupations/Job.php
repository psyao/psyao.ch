<?php namespace Psyao\Occupations;

use Carbon\Carbon;
use Eloquent;

/**
 * Class Job
 *
 * @package Psyao\Occupations
 */
class Job extends Eloquent
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['from', 'to'];

    /**
     * A job belongs to a company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function company()
    {
        return $this->belongsTo('Psyao\Occupations\Company');
    }

    /**
     * Join a new job.
     *
     * @param string $title
     * @param Carbon $from
     * @param Carbon $to
     * @param string $description
     *
     * @return static
     */
    public static function practice($title, Carbon $from, Carbon $to = null, $description = null)
    {
        return new static(compact('title', 'from', 'to', 'description'));
    }
}
