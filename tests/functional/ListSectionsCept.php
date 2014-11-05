<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');

$I->wantTo('list sections');

// When
$sections =  $I->haveSections();

// And
$I->amOnPage('/admin/sections');

// Then
$first = $sections->first();

$I->see('Sections','h1');
$I->see('There are 10 sections');
$I->see($sections->first()->name,'tbody tr:first-child td.name');
$I->see($sections->last()->name,'tbody tr:last-child td.name');
return;
// When
$I->click('Show','tbody tr:first-child');

// Then
$I->expectTo('see the section details');
$I->seeCurrentUrlEquals('/admin/sections/' . $first->id);
$I->see($first->name,'h1');

// When
$I->amOnPage('/admin/sections');
$I->click('Edit','tbody tr:first-child');

// Then
$I->expectTo('edit section');
$I->seeCurrentUrlEquals('/admin/sections/' . $first->id . '/edit');
$I->see('Edit section "' . $first->name . '"','h1');
$I->seeInField('name',$first->name);
