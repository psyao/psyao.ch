<?php namespace Psyao\Resume\Skills;

class EditSkillCommand
{
    public $id;
    public $name;
    public $level;

    function __construct($id, $name, $level)
    {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }
} 