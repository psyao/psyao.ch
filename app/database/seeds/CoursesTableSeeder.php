<?php

use Psyao\Resume\Educations\Course;
use Psyao\Resume\Educations\CourseRepository;
use Psyao\Resume\Educations\Institute;
use Psyao\Resume\Educations\InstituteRepository;

class CoursesTableSeeder extends Seeder
{
    /**
     * @var InstituteRepository
     */
    protected $instituteRepository;
    /**
     * @var CourseRepository
     */
    protected $courseRepository;

    function __construct(InstituteRepository $instituteRepository, CourseRepository $courseRepository)
    {
        $this->instituteRepository = $instituteRepository;
        $this->courseRepository = $courseRepository;
    }

    public function run()
    {
        DB::table('courses')->truncate();

        $institutes = Config::get('psyao.institutes');

        foreach ($institutes as $institute)
        {
            $currentInstitute = $this->instituteRepository->getByName($institute['name']);

            foreach ($institute['courses'] as $course)
            {
                $this->saveCourse($course, $currentInstitute->id);

                $this->updateInstituteDates($currentInstitute, $course);
            }
        }
    }

    /**
     * @param array   $course
     * @param integer $instituteId
     */
    private function saveCourse(array $course, $instituteId)
    {
        $this->courseRepository->save(
            Course::follow(
                $course['title'],
                $course['domain'],
                $course['from'],
                $course['to'],
                $course['diploma']
            ),
            $instituteId
        );
    }

    /**
     * @param Institute $institute
     * @param array     $course
     */
    private function updateInstituteDates(Institute $institute, array $course)
    {
        if ($institute->from == null || $course['from']->lt($institute->from))
        {
            $institute->from = $course['from'];
        }

        if ($institute->to == null || $course['to']->gt($institute->to))
        {
            $institute->to = $course['to'];
        }

        if ($institute->isDirty())
        {
            $institute->save();
        }
    }

}
