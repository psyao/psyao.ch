<?php namespace Psyao\Resume\Skills;

class DeleteSkillCommand
{
    public $id;

    function __construct($id)
    {
        $this->id = $id;
    }
} 