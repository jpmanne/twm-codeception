<?php
//Login Functionality
$I = new AcceptanceTester($scenario);
$I->amOnPage('/'); // validates the application URL from acceptance.suite.yml file
$I->wantTo('Ensure the SIGN IN functionality');
$I->canSeeInCurrentUrl('stage.twm.radiantexp.com');// conditional assertions to check specific URL is visible or not
$I->fillField('#user-login-form input[name=name]', 'researchadmin'); // Enters username textfield using 'name' locator 
$I->fillField('#user-login-form input[name=pass]', 'AttainED%6'); // Enters password textfield  using 'name' locator 
$I->click('Log in'); // Clicks on  Log in button
$I->dontsee('Username field is required.'); // Assertion statement to check Error message is visible on page or not
$I->dontsee('Password field is required.'); // Assertion statement to check Error message is visible on page or not
$I->see('Home'); // Assertion statement to check message is visible on page or not	
$I->see('Log out');	//Log out Functionality // Assertion statement to check Logout message is visible on page or not
$I->click('Log out');	//Log out Functionality // Clicks Logout button