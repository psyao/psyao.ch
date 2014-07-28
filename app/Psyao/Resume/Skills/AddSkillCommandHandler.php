<?php namespace Psyao\Resume\Skills;

use Laracasts\Commander\CommandHandler;

class AddSkillCommandHandler implements CommandHandler
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
        $skill = Skill::build($command->name, $command->level);

        $this->skillRepository->save($skill);
    }
}