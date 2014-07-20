<?php

use Psyao\Contact\PostMessageCommand;
use Psyao\Core\CommandBus;
use Psyao\Forms\ContactForm;

class ContactController extends BaseController
{
    use CommandBus;

    /**
     * @var ContactForm
     */
    protected $contactForm;

    function __construct(ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;
    }

    /**
     * Send a contact message.
     *
     * @return Response
     */
    public function store()
    {
        $this->contactForm->validate($input = Input::only(['name', 'email', 'subject', 'body']));

        extract($input);

        $command = new PostMessageCommand($name, $email, $subject, $body);

        if ( ! $this->execute($command))
        {
            Flash::error("Votre message n'a pa pu être envoyé!");
        }

        Flash::success('Votre message a été envoyé!');

        return Redirect::home();
    }

}
