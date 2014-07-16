<?php namespace Psyao\Educations;

use Eloquent;

class Education extends Eloquent
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['from', 'to'];

    /**
     * Add a new education item.
     *
     * @param array $items
     *
     * @return static
     */
    public static function create(array $items)
    {
        $user = new static($items);

        return $user;
    }
}
