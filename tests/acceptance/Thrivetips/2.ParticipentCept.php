<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;

//Login Functionality
$I = new login($scenario);
$I->login('participant', '07selEna+?');

//Create Posts Functionality
$I = new thriveTips($scenario);
$I->userContent('Sample PDF', 'Medium', 'Comment as Participant', 'html/body/div[2]/main/div/article/div[5]/div[1]/div[2]/div[2]/span/a', 'html/body/div[2]/main/div/article/div[5]/div[1]/div[2]/div[2]/span/span[1]');
$I->userContent('My Video Thrive Tip', 'Category 1', 'Comment as Participant', 'html/body/div[2]/main/div/article/div[5]/div[1]/div[2]/div[2]/span/a', 'html/body/div[2]/main/div/article/div[5]/div[1]/div[2]/div[2]/span/span[1]');

//Comment for the Post
$I = new homeWall($scenario);
$I->comment_Wall('Participent', '', 'Cool Pic');