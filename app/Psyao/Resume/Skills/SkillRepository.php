<?php namespace Psyao\Resume\Skills;

use Str;

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
     * @param integer $id
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function getById($id)
    {
        return Skill::findOrFail($id);
    }

    /**
     * Persist a skill.
     *
     * @param Skill $skill
     *
     * @return mixed
     */
    public function save(Skill $skill)
    {
        return $this->setSlugFromName($skill)->save();
    }

    /**
     * @param Skill $skill
     *
     * @return Skill
     */
    protected function setSlugFromName(Skill $skill)
    {
        if (empty($skill->slug) || $skill->isDirty('name'))
        {
            $slug = Str::slug($skill->name);
            $slugCount = count(Skill::whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get());

            $skill->slug = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
        }

        return $skill;
    }
} 