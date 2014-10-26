<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('see sections details');

// When
$id = $I->haveSection();

$I->amOnPage('admin/sections/' . $id);

// Then
//$I->seeCurrentUrlEquals('/admin/sections/1');
$I->expectTo('see the section details');
$I->see('Our Company','h1');
$I->see('our-company','.slug-url');
$I->see('2','.menu-order');
$I->see('Show in menu','.menu');
$I->see('Draft','.published');