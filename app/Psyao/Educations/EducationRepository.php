<?php namespace Psyao\Educations;

class EducationRepository
{
    /**
     * @var Education
     */
    protected $education;

    function __construct(Education $education)
    {
        $this->education = $education;
    }

    /**
     * Get all the education items
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->education->orderBy('to', 'desc')->get();
    }

    /**
     * Persist a new education item.
     *
     * @param Education $education
     *
     * @return mixed
     */
    public function save(Education $education)
    {
        return $education->save();
    }
} 