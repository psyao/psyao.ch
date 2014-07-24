<?php namespace Psyao\Resume\Educations;

use Carbon\Carbon;

/**
 * Class InstituteRepository
 *
 * @package Psyao\Eductions
 */
class InstituteRepository
{
    /**
     * Get
     *
     * @param string $name
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function getByName($name)
    {
        return Institute::whereName($name)
            ->first();
    }

    /**
     * Get all the institutes.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return Institute::where('from', '<=', Carbon::now())
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