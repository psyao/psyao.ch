<?php

class PagesController extends BaseController
{

    /**
     * Display the home page.
     * GET /pages
     *
     * @return Response
     */
    public function home()
    {
        return View::make('pages.home');
    }

}