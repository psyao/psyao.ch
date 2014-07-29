<?php namespace Psyao\Resume\Skills;

use Laracasts\Commander\CommandHandler;

class DeleteSkillCommandHandler implements CommandHandler
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
        $this->skillRepository->getById($command->id)->delete();
    }
}