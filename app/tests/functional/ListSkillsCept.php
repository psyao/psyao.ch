<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('list all the skills');

$I->haveASkill(['name' => 'Foo']);
$I->haveASkill(['name' => 'Bar']);
$I->haveASkill(['name' => 'Baz']);

$I->amOnPage('/admin/skills');
$I->see('Foo');
$I->see('Bar');
$I->see('Baz');