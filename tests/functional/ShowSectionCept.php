<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('see sections details');


// Then
$I->seeCurrentUrlEquals('/admin/sections/1');
$I->see('Our Company','h1');
$I->see('our-company','.slug-url');
$I->see('2','menu_order');
$I->see('Show in menu','.menu');
$I->see('Draft','.published');
$I->seeRecord('sections',[
    'name' => 'Our Company',
    'menu_order' => 2,
    'menu' => 1,
    'published' => 0]);