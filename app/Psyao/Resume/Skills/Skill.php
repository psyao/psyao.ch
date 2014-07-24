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
     * Learn a new skill.
     *
     * @param $name
     * @param $level
     *
     * @return static
     */
    public static function learn($name, $level)
    {
        $slug = Str::slug($name);

        return new static(compact('name', 'slug', 'level'));
    }
}
