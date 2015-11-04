<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;

//Login Functionality
$I = new login($scenario);
$I->login('user2', 'user2');
//$I->login('participant', '07selEna+?');

/*//Create Posts Functionality
$I = new thriveTips($scenario);
$I->userContent('Sample PDF', 'Medium', 'Comment as Participant', 'html/body/div[2]/main/div/article/div[5]/div[2]/div[2]/div[2]/span/a', 'html/body/div[2]/main/div/article/div[5]/div[2]/div[2]/div[2]/span/span');*/

//Comment for the Post
$I = new homeWall($scenario);
$I->public_Wall('Image', 'Add Photo', 'photo', 'RunAppDownload.jpg', '', 'Participent', '', '', '', 'Cool', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[5]/div[2]/div[2]/span/span/a', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[5]/div[2]/div[2]/span[1]/span/span');

//Achievements
$I = new homeWall($scenario);
$I->achievement('html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[6]/div[2]/div[2]/span[1]/a', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[7]/div[2]/div[2]/span[1]/a', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[8]/div[2]/div[2]/span[1]/a)');