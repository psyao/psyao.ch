<?php namespace Psyao\Contact;

use Carbon\Carbon;

class PostMessageCommand
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $date;

    function __construct($name, $email, $subject, $body)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->body = $body;
        $this->date = Carbon::now();
    }
} 