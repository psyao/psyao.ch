<?php
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('delete a skill');

$I->haveASkill(
    [
        'id'    => 1,
        'name'  => 'My skill',
    ]
);

$I->amOnPage('/admin/skills');
$I->click('Delete', '#delete-1');

$I->seeCurrentUrlEquals('/admin/skills');
$I->dontSee('My skill');
$I->dontSeeRecord(
    'skills',
    [
        'id'    => 1,
        'name'  => 'My skill'
    ]
);