<?php namespace Psyao\Resume\Skills;

/**
 * Class SkillRepository
 *
 * @package Psyao\Skills
 */
class SkillRepository
{
    /**
     * Get all the skills.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return Skill::all();
    }

    /**
     * Persist a new skill.
     *
     * @param Skill $skill
     *
     * @return mixed
     */
    public function save(Skill $skill)
    {
        return $skill->save();
    }
} 