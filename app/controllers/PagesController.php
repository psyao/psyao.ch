<?php

use Psyao\Resume\Occupations\CompanyRepository;
use Psyao\Resume\Educations\InstituteRepository;

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

    function __construct(CompanyRepository $companyRepository, InstituteRepository $instituteRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->instituteRepository = $instituteRepository;
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

        return View::make('pages.home', compact('companies', 'institutes'));
    }

}