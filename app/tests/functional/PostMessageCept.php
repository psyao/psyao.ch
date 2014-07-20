<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('send a message');

$I->amOnPage('/');

$I->fillField('name', 'John Doe');
$I->fillField('email', 'johndoe@example.com');
$I->fillField('subject', 'Hello');
$I->fillField('body', 'My first message');
$I->click('Envoyer');

$I->seeCurrentUrlEquals('');
$I->see('Votre message a été envoyé!');

$I->openFile('app/storage/logs/laravel.log');
$I->canSeeInThisFile('psyao.ch : formulaire de contact');