<?php

use Carbon\Carbon;
use Psyao\Educations\Education;
use Psyao\Educations\EducationRepository;

class EducationsTableSeeder extends Seeder
{
    /**
     * @var EducationRepository
     */
    private $educations;

    function __construct(EducationRepository $educations)
    {
        $this->educations = $educations;
    }

    public function run()
    {
        DB::table('educations')->truncate();

        $educations = [
            [
                'title'    => "Ingénieur des médias",
                'from'     => Carbon::create(2004, 10, 1),
                'to'       => Carbon::create(2008, 7, 31),
                'school'   => "HEIG-VD",
                'location' => "Lausanne/Yverdon",
                'field'    => "Communication, ingénieurie et management - IT",
            ],
            [
                'title'    => "Apprentissage de Concepteur en multimédia",
                'from'     => Carbon::create(2002, 8, 1),
                'to'       => Carbon::create(2004, 7, 31),
                'school'   => "ERACOM",
                'location' => "Lausanne",
                'degree'   => "Certificat fédéral de capacité de Concepteur en multimédia",
                'field'    => "Gestion du web/multimédia et Webmaster",
            ],
            [
                'title'    => "HEC",
                'from'     => Carbon::create(2000, 10, 1),
                'to'       => Carbon::create(2001, 7, 31),
                'school'   => "Faculté des hautes études commerciales",
                'location' => "Lausanne",
                'field'    => "Sciences économiques",
            ],
            [
                'title'    => 'Droit',
                'from'     => Carbon::create(1995, 10, 1),
                'to'       => Carbon::create(1999, 7, 31),
                'school'   => "Faculté de droit",
                'location' => "Lausanne",
                'field'    => "Sciences juridiques",
            ],
            [
                'title'    => "Gymnase",
                'from'     => Carbon::create(1992, 8, 1),
                'to'       => Carbon::create(1995, 7, 31),
                'school'   => "Centre d'études secondaires et supérieures",
                'location' => "Morges",
                'degree'   => "Baccalauréat et maturité fédérale ès sciences économiques",
                'field'    => "Economie et droit",
            ],
        ];

        foreach ($educations as $education) {
            $this->educations->save(Education::create($education));
        }
    }

}
