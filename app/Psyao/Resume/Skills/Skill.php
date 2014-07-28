<?php namespace Psyao\Resume\Skills;

use Eloquent;
use Str;

/**
 * Class Skill
 *
 * @package Psyao\Resume
 */
class Skill extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'level'];

    /**
     * Build a new skill.
     *
     * @param $name
     * @param $level
     *
     * @return static
     */
    public static function build($name, $level)
    {
        $slug = Str::slug($name);

        return new static(compact('name', 'slug', 'level'));
    }
}
