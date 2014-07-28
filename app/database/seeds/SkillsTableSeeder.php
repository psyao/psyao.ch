<?php

use Laracasts\Commander\CommanderTrait;
use Psyao\Resume\Skills\AddSkillCommand;

class SkillsTableSeeder extends Seeder
{
    use CommanderTrait;

    public function run()
    {
        DB::table('skills')->truncate();

        $skills = Config::get('psyao.skills');

        foreach ($skills as $skill)
        {
            $this->execute(AddSkillCommand::class, $skill);
        }
    }

}
