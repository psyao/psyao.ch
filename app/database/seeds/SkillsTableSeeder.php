<?php

use Psyao\Resume\Skills\Skill;
use Psyao\Resume\Skills\SkillRepository;

class SkillsTableSeeder extends Seeder
{
    /**
     * @var SkillRepository
     */
    protected $skillRepository;

    function __construct(SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }

    public function run()
    {
        DB::table('skills')->truncate();

        $skills = Config::get('psyao.skills');

        foreach ($skills as $skill)
        {
            $this->saveSkill($skill);
        }
    }

    /**
     * @param array $skill
     */
    private function saveSkill(array $skill)
    {
        $this->skillRepository->save(
            Skill::learn(
                $skill['name'],
                $skill['level']
            )
        );
    }

}
