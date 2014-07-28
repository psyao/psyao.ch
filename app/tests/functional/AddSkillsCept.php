<?php
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('add a new skill');

$I->amOnPage('/admin/skills/create');

$I->fillField('Name:', 'My new skill');
$I->fillField('Level:', 65);
$I->click('Add Skill');

$I->seeCurrentUrlEquals('/admin/skills');
$I->see('My new skill');
$I->seeRecord(
    'skills',
    [
        'name'  => 'My new skill',
        'slug'  => Str::slug('My new skill'),
        'level' => 65
    ]
);