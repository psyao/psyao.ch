<?php namespace Psyao\Resume\Skills;

class AddSkillCommand
{
    public $name;
    public $level;

    function __construct($name, $level)
    {
        $this->name = $name;
        $this->level = $level;
    }
} 