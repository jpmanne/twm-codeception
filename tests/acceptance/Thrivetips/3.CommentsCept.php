<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;


//Login as Participent
$I = new login($scenario);
$I->login('participant', '07selEna+?');

//$title, $flag, $verify_flag, $reply_btn, $reply
//Flags Functionality as a Participent
$I = new thriveTips($scenario);
$I->flags_user('test from my end', 'html/body/div[2]/main/div/article/div[3]/span/a', 'html/body/div[2]/main/div/article/div[3]/span/span', 'html/body/div[2]/main/div/article/div[4]/div[1]/ul/li/a', 'Comment for Reply');


//Login as RA Admin
$I = new login($scenario);
$I->login('researchadmin', 'AttainED%6');


//Flags Functionality as a Participent
$I = new thriveTips($scenario);
$I->flags_RA('html/body/div[2]/main/div/div[2]/div/table/tbody/tr[1]/td[3]/a', 'html/body/div[2]/main/div/div[2]/div/table/tbody/tr[2]/td[4]/p', 'html/body/div[2]/main/div/div[2]/div/table/tbody/tr[1]/td[6]/span/a', 'html/body/div[2]/main/div/div[2]/div/table/tbody/tr[2]/td[5]/a');

/*$number = 'Adding Html Content2';
if ($number == $I->see('Adding Html Content2')) {
	$I->click('Adding Html Content2');
} else if {
	$I->click('html/body/div[2]/main/aside/section[2]/div/div[2]/div/ul/li[2]/a');
	$I->click('Adding Html Content2');
}*/