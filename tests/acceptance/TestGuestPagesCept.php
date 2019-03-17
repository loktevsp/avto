<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home');

$I->amOnPage('/');
$I->see('Avto.ru');
