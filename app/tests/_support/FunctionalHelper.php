<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

class FunctionalHelper extends \Codeception\Module
{
    public function haveASkill($overrides = [])
    {
        return $this->have('Psyao\Resume\Skills\Skill', $overrides);
    }

    protected function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }
}