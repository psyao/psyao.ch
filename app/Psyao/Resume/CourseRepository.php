<?php namespace Psyao\Resume;

/**
 * Class CourseRepository
 *
 * @package Psyao\Resume
 */
class CourseRepository
{
    /**
     * Persist a new course.
     *
     * @param Course  $course
     * @param integer $instituteId
     *
     * @return mixed
     */
    public function save(Course $course, $instituteId)
    {
        return Institute::findOrFail($instituteId)
            ->courses()
            ->save($course);
    }
} 