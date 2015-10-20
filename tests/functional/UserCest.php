<?php
class UserCest 
{    
    function showUserProfile(AcceptanceTester $I, \Page\InvitePage $loginPage)
    {
        $loginPage->login('admin', 'AGCGbst94');
        $I->amOnPage('/profile');
        $I->see('Bill Evans Profile', 'h1');        
    }
}
?>