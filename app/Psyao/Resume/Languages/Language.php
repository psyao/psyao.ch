<?php namespace Psyao\Resume\Languages;

use Eloquent;
use Str;

/**
 * Class Language
 *
 * @package Psyao\Resume
 */
class Language extends Eloquent
{
    /**
     * Learn a new language.
     *
     * @param string  $name
     *
     * @param integer $understanding
     * @param integer $speaking
     * @param integer $writing
     * @param boolean $mother_tongue
     *
     * @return static
     */
    public static function learn($name, $understanding, $speaking, $writing, $mother_tongue = false)
    {
        $slug = Str::slug($name);

        return new static(compact('name', 'slug', 'understanding', 'speaking', 'writing', 'mother_tongue'));
    }
}
