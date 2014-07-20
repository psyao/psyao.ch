<?php namespace Psyao\Forms;

use Laracasts\Validation\FormValidator;

class ContactForm extends FormValidator
{
    /**
     * Validation rules for the contact form.
     *
     * @var array
     */
    protected $rules = [
        'name'    => 'required',
        'email'   => 'required|email',
        'subject' => 'required',
        'body'    => 'required',
    ];

    /**
     * Error messages for the contact form.
     *
     * @var array
     */
    protected $messages = [
        'name.required'    => "Veuillez indiquer votre nom.",
        'email.required'   => "Veuillez indiquer votre adresse email.",
        'email.email'      => "Veuillez indiquer une adresse email valide.",
        'subject.required' => "Veuillez indiquer le sujet de votre.",
        'body.required'    => "Veuillez indiquer votre message.",
    ];
} 