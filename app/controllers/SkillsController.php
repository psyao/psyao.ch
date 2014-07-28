<?php

use Psyao\Forms\AddSkillForm;
use Psyao\Resume\Skills\AddSkillCommand;
use Psyao\Resume\Skills\SkillRepository;

class SkillsController extends BaseController
{
    /**
     * @var SkillRepository
     */
    protected $skillRepository;
    /**
     * @var AddSkillForm
     */
    protected $addSkillForm;

    function __construct(SkillRepository $skillRepository, AddSkillForm $addSkillForm)
    {
        $this->skillRepository = $skillRepository;
        $this->addSkillForm = $addSkillForm;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $skills = $this->skillRepository->getAll();

        return View::make('skills.index')->withSkills($skills);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('skills.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->addSkillForm->validate($input = Input::only(['name', 'level']));

        if (!$this->execute(AddSkillCommand::class, $input))
        {
            Flash::error("The skill hasn't been created!");

            Redirect::back()->withInput();
        }

        Flash::success("The skill has been created!");

        return Redirect::route('admin.skills.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
