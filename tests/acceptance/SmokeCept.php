<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;
use Step\Acceptance\Achievements as user_achvmts;
use Step\Acceptance\Surveydetails as survey;
use Step\Acceptance\Logout as logout;

//Login Functionality
$I = new login($scenario);
$I->login('rauser2', 'rauser');
//$I->login('researchadmin', 'AttainED%6');

//Thrivetips Functionality 
$I = new thriveTips($scenario);
$I->addContent('Selenium Video', 'Video', 'video', '', 'Selenium Training video', 'https://www.youtube.com/watch?v=IhJgrLjljpc', '', '', '', '', 'Medium', '8', 'Thrive Tips Selenium Video has been created.');

//Post as a Public Message
$I = new homeWall($scenario);
$I->public_Wall('Image', 'Add Photo', 'photo', 'Winter.jpg', '', 'RA', 'Cool', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[2]/span/a', '', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[5]/div[2]/div[2]/span[2]/span/a', '', '', '', '', '', '');

//Check Posts and Votes Achievements to be Unlocked
$I = new user_achvmts($scenario);
$I->achievement('html/body/div[2]/main/div/div[2]/div/div[1]/div[2]/div[2]/div[1]', 'html/body/div[2]/main/div/div[2]/div/div[2]/div[2]/div[2]/div[1]', 'html/body/div[2]/main/div/fieldset/div/div[3]/div[3]/div[2]/span/a', 'html/body/div[2]/main/div/fieldset/div/div[4]/div[3]/div[2]/span/a', 'html/body/div[2]/main/div/fieldset/div/div[5]/div[3]/div[2]/span/a', '2015/12/08');

//Clicking on Logout button
$I = new logout($scenario);
$I->logout();
