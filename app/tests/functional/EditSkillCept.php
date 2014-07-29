<?php
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('edit a skill');

$I->haveASkill(
    [
        'id'    => 1,
        'name'  => 'My skill',
        'level' => 15
    ]
);
$I->haveASkill(
    [
        'id'    => 2,
        'name'  => 'My other skill',
        'level' => 20
    ]
);

$I->amOnPage('/admin/skills');
$I->click('Edit', '#edit-1');

$I->seeCurrentUrlEquals('/admin/skills/1/edit');
$I->see('My skill');
$I->see(15);

$I->fillField('Name:', 'My edited skill');
$I->fillField('Level:', 65);
$I->click('Edit Skill');

$I->seeCurrentUrlEquals('/admin/skills');
$I->see('My edited skill');
$I->seeRecord(
    'skills',
    [
        'name'  => 'My edited skill',
        'slug'  => Str::slug('My edited skill'),
        'level' => 65
    ]
);
$I->dontSeeRecord(
    'skills',
    [
        'name'  => 'My other skill',
        'level' => 65
    ]
);