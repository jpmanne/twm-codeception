<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;

//Login Functionality
$I = new login($scenario);
$I->login('researchadmin', 'AttainED%6');

//Post as a Public Message
$I = new homeWall($scenario);
//$I->public_Wall('Posting a Image', 'Add Photo', 'photo', 'Winter.jpg', '');
$I->public_Wall('Posting a Video', 'Share Video', 'video', '', 'https://www.youtube.com/watch?v=Bi-v6M4fGbA');

//Thrivetips Functionality 
/*$I = new thriveTips($scenario);
$I->addContent('Add Html Content3', 'Html', 'html', 'The author, producer or publisher of an original source.', '', '', '', '', '', '', 'Medium', 'Thrive Tips Add Html Content3 has been created.');
$I->addContent('Sample Video', 'Video', 'video', 'The author, producer or publisher of an original source.', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', '', '', '', 'Medium', 'Thrive Tips Sample Video has been created.');
$I->addContent('Sample OffsiteContent', 'Offsite Content', 'offsite', '', '', '', '', 'Offsite Content', '', '#edit-field-thrive-tags-und-3', 'Thrive Tips Sample OffsiteContent has been created.');
$I->addContent('Sample PDF', 'Pdf', 'pdf', '', '', '', 'Ticket.pdf', '#edit-field-thrive-tags-und-2', 'Thrive Tips Sample PDF has been created.');*/

//Clicking on Logout  button
//$I->click('logout');
