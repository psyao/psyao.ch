<?php

use Psyao\Educations\EducationRepository;

class PagesController extends BaseController
{
    /**
     * @var EducationRepository
     */
    protected $educations;

    function __construct(EducationRepository $educations)
    {
        $this->educations = $educations;
    }

    /**
     * Display the home page.
     * GET /pages
     *
     * @return Response
     */
    public function home()
    {
        $educations = $this->educations->getAll();

        return View::make('pages.home', compact('educations'));
    }

}