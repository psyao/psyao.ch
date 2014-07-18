<?php namespace Psyao\Resume;

/**
 * Class CourseRepository
 *
 * @package Psyao\Resume
 */
class CourseRepository
{
    /**
     * @var Institute
     */
    protected $institute;

    function __construct(Institute $institute)
    {
        $this->institute = $institute;
    }

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
        return $this->institute->findOrFail($instituteId)
            ->courses()
            ->save($course);
    }
} 