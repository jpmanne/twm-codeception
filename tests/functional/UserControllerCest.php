<?php

/**
 * @guy AcceptanceTester\InvitePage
 */
 
class UserControllerCest
{    
    function showUserProfile(AcceptanceTester $I, \Page\Login $loginPage)
    {
        $loginPage->login('admin', 'AGCGbst94');   
    }
}
?>