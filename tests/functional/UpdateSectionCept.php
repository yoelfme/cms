<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('update a section');

// When
$id = $I->haveRecord('sections',[
    'name' => 'Our Company',
    'slug_url' => 'our-company',
    'menu_order' => 2,
    'menu' => 1,
    'type'=>'page',
    'published' => 0
]);

// And
$I->amOnPage('admin/sections/' . $id);

// Then
$I->see('Edit section','.btn-edit');

// When
$I->click('Edit section');
// Then
$I->seeCurrentUrlEquals('admin/sections/' . $id . '/edit');
$I->see('Edit section "Our Company"','h1');
$I->seeInField('name','Our Company');
$I->seeInField('slug_url','our-company');
$I->seeInField('menu_order',2);
$I->seeOptionIsSelected('published',0);
$I->seeOptionIsSelected('menu',1);
$I->seeOptionIsSelected('type','page');





