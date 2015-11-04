<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;
use Step\Acceptance\Logout as logout;

//Login Functionality
$I = new login($scenario);
$I->amGoingTo('LOGIN WITH VALID CREDENTIALS');
$I->login('researchadmin', 'AttainED%6');
//$I->login('participant', '07selEna+?');
$I->expect('SIGN-IN IS SUCCESSFUL');

//Post as a Public Message
$I = new homeWall($scenario);
$I->amGoingTo('POST PUBLIC MESSAGE OF IMAGE CATEGORY');
$I->public_Wall('Image', 'Add Photo', 'photo', 'RunAppDownload.jpg', '', 'RA', 'Cool', 'html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[3]/span/a', 'html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[3]/span/a', 'html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[4]/span/a', 'html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[4]/span/a', '', '', '', '', '');
$I->expect('PUBLIC MESSAGE POSTED SUCCESSFULLY');

/*//Thrivetips Functionality 
$I = new thriveTips($scenario);
$I->addContent('Add Html Content3', 'Html', 'html', 'The author, producer or publisher of an original source.', '', '', '', '', '', '', 'Medium', 'Thrive Tips Add Html Content3 has been created.');
$I->addContent('Sample Video', 'Video', 'video', 'The author, producer or publisher of an original source.', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', '', '', '', 'Medium', 'Thrive Tips Sample Video has been created.');
$I->addContent('Sample OffsiteContent', 'Offsite Content', 'offsite', '', '', '', '', 'Offsite Content', '', '#edit-field-thrive-tags-und-3', 'Thrive Tips Sample OffsiteContent has been created.');
$I->addContent('Sample PDF', 'Pdf', 'pdf', '', '', '', 'Ticket.pdf', '#edit-field-thrive-tags-und-2', 'Thrive Tips Sample PDF has been created.');*/

//Clicking on Logout button
$I = new logout($scenario);
$I->logout();