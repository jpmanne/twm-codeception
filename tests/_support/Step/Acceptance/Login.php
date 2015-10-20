<?php
namespace Step\Acceptance;

class Login extends \AcceptanceTester
{
    public function login($user, $pass)
    {
        $I = $this;
        $I->amOnPage('/');
        $I->fillField('#user-login-form input[name=name]', $user);
        $I->fillField('#user-login-form input[name=pass]', $pass);
        $I->click('Log in');
		$I->dontsee('Password field is required.');
    }
}