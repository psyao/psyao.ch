<?php

use Psyao\Resume\Educations\Institute;
use Psyao\Resume\Educations\InstituteRepository;

class InstitutesTableSeeder extends Seeder
{
    /**
     * @var InstituteRepository
     */
    protected $instituteRepository;

    function __construct(InstituteRepository $instituteRepository)
    {
        $this->instituteRepository = $instituteRepository;
    }

    public function run()
    {
        DB::table('institutes')->truncate();

        $institutes = Config::get('psyao.institutes');

        foreach ($institutes as $institute)
        {
            $this->saveInstitute($institute);
        }
    }

    /**
     * @param array $institute
     */
    private function saveInstitute(array $institute)
    {
        $this->instituteRepository->save(
            Institute::enrole(
                $institute['name'],
                $institute['location']
            )
        );
    }

}
