<?php

$I = new FunctionalTester($scenario);
$I->am('a Laravel developer');
$I->wantTo('know if Laravel was installed sucessfully');

$I->amOnPage('/');
$I->see('You have arrived');
