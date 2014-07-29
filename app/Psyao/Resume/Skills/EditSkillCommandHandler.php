<?php namespace Psyao\Resume\Skills;

use Laracasts\Commander\CommandHandler;

class EditSkillCommandHandler implements CommandHandler
{
    /**
     * @var SkillRepository
     */
    private $skillRepository;

    function __construct(SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        $skill = $this->skillRepository->getById($command->id);

        $skill->name = $command->name;
        $skill->level = $command->level;

        $this->skillRepository->save($skill);
    }
}