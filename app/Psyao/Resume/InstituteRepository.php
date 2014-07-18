<?php namespace Psyao\Resume;

use Carbon\Carbon;

/**
 * Class InstituteRepository
 *
 * @package Psyao\Eductions
 */
class InstituteRepository
{
    /**
     * @var Institute
     */
    protected $institute;

    /**
     * @param Institute $institute
     */
    function __construct(Institute $institute)
    {
        $this->institute = $institute;
    }

    /**
     * Get
     *
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function getByName($name)
    {
        return $this->institute
            ->whereName($name)
            ->first();
    }

    /**
     * Get all the institutes.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->institute
            ->where('from', '<=', Carbon::now())
            ->with('courses')
            ->orderBy('from', 'desc')
            ->get();
    }

    /**
     * Persist a new institute.
     *
     * @param Institute $institute
     *
     * @return mixed
     */
    public function save(Institute $institute)
    {
        return $institute->save();
    }
} 