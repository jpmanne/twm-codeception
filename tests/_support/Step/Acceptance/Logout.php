<?php
namespace Step\Acceptance;

class Logout extends \AcceptanceTester
{
    public function logout()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click('Log out');
	$I->expect('SUCCESSFULLY LOGGED OUT FROM THE PAGE');
	}
}
