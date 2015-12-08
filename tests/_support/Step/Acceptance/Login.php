<?php
namespace Step\Acceptance;

class Login extends \AcceptanceTester
{
    public function login($user, $pass)
    {
        $I = $this;
		$I->amGoingTo('LOGIN WITH VALID CREDENTIALS');
        $I->amOnPage('/');
        $I->fillField('#user-login-form input[name=name]', $user);
        $I->fillField('#user-login-form input[name=pass]', $pass);
        $I->click('Log in');
		$message = $I->grabTextFrom('#page-title');
		if ($message == 'Home') {
			$I->expect('SIGN-IN IS SUCCESSFUL');
		} else if($message != 'Home') {
			$I->expect('SIGN-IN IS UNSUCCESSFUL');
			$I->see('Username field is required.');
			$I->see('Password field is required.');
		}
    }
}
