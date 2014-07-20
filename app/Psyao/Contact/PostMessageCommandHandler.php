<?php namespace Psyao\Contact;

use Config;
use Laracasts\Commander\CommandHandler;
use Mail;

class PostMessageCommandHandler implements CommandHandler
{
    /**
     * Handle the command
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        Mail::send(
            'emails.contact.message',
            ['mail' => $command],
            function ($message) use ($command)
            {
                $message
                    ->to(Config::get('mail.from.address'), Config::get('mail.from.name'))
                    ->from($command->email, e($command->name))
                    ->subject('[psyao.ch] ' . e($command->subject));
            }
        );

        return ! count(Mail::failures());
    }
}