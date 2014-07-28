<?php namespace Psyao\Forms;

use Laracasts\Validation\FormValidator;

class AddSkillForm extends FormValidator
{
    /**
     * Validation rules for the contact form.
     *
     * @var array
     */
    protected $rules = [
        'name'    => 'required',
        'level'   => 'required|integer|between:0,100'
    ];
} 