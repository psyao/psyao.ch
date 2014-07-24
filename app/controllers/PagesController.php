<?php

use Psyao\Resume\Occupations\CompanyRepository;
use Psyao\Resume\Educations\InstituteRepository;
use Psyao\Resume\Skills\SkillRepository;

class PagesController extends BaseController
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepository;
    /**
     * @var InstituteRepository
     */
    protected $instituteRepository;
    /**
     * @var SkillRepository
     */
    private $skillRepository;

    function __construct(
        CompanyRepository $companyRepository,
        InstituteRepository $instituteRepository,
        SkillRepository $skillRepository
    )
    {
        $this->companyRepository = $companyRepository;
        $this->instituteRepository = $instituteRepository;
        $this->skillRepository = $skillRepository;
    }

    /**
     * Display the home page.
     * GET /pages
     *
     * @return Response
     */
    public function home()
    {
        $companies = $this->companyRepository->getAll();
        $institutes = $this->instituteRepository->getAll();
        $skills = $this->skillRepository->getAll();

        return View::make('pages.home', compact('companies', 'institutes', 'skills'));
    }

}