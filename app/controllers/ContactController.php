<?php

use Psyao\Contact\PostMessageCommand;
use Psyao\Forms\ContactForm;

class ContactController extends BaseController
{
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

        if (!$this->execute(PostMessageCommand::class, $input))
        {
            Flash::error("Votre message n'a pa pu être envoyé!");

            Redirect::back()->withInput();
        }

        Flash::success('Votre message a été envoyé!');

        return Redirect::home();
    }
}
