<?php 
use Step\Acceptance\Login as login;
use Step\Acceptance\ThriveTips as thriveTips;
use Step\Acceptance\PublicMessages as homeWall;

//Login Functionality
$I = new login($scenario);
$I->login('researchadmin', 'AttainED%6');

//Thrivetips Functionality 
$I = new thriveTips($scenario);
$I->addContent('Add Html Content3', 'Html', 'html', 'The author, producer or publisher of an original source.', '', '', '', '', '', '', 'Medium', 'Thrive Tips Add Html Content3 has been created.');
$I->addContent('Sample Video', 'Video', 'video', '', 'Video Info', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', '', '', '', 'Medium', 'Thrive Tips Sample Video has been created.');
$I->addContent('Sample OffsiteContent', 'Offsite Content', 'offsite', '', '', '', 'OffsiteContent Info', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', '', 'Medium', 'Thrive Tips Sample OffsiteContent has been created.');
$I->addContent('Sample PDF', 'Pdf', 'pdf', '', '', '', '', '', 'PDF Info', 'Ticket.pdf', 'Medium', 'Thrive Tips Sample PDF has been created.');

//Edit Thrivetips Functionality
$I = new thriveTips($scenario);
$I->editContent('Add Html Content3', 'Add Html Content3', 'html', 'The author, producer or publisher of an original source.', '', '', '', '', '', 'Medium', 'Thrive Tips Add Html Content3 has been updated.');
$I->editContent('Sample Video', 'Sample Video', 'video', '', 'Video Info', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', '', '', 'Medium', 'Thrive Tips Sample Video has been updated.');
$I->editContent('Sample OffsiteContent', 'Sample OffsiteContent', 'offsite', '', '', '', 'OffsiteContent Info', 'https://www.youtube.com/watch?v=ZaxGcgUiBOo', '', 'Medium', 'Thrive Tips Sample OffsiteContent has been updated.');
$I->editContent('Sample PDF', 'Sample PDF', 'pdf', '', '', '', '', '', 'PDF Info', 'Medium', 'Thrive Tips Sample PDF has been updated.');

//Delete Thrivetips Functionality
$I = new thriveTips($scenario);
$I->deleteContent('Add Html Content3', 'Thrive Tips Add Html Content3 has been deleted.');
$I->deleteContent('Sample Video', 'Thrive Tips Sample Video has been deleted.');
$I->deleteContent('Sample OffsiteContent', 'Thrive Tips Sample OffsiteContent has been deleted.');
$I->deleteContent('Sample PDF', 'Thrive Tips Sample PDF has been deleted.');

//Create Public Messages
/*$I = new thriveTips($scenario);
$I->PublicMessages('Post as Public Message', 'Post as Public Message', 'Winter.jpg', 'https://www.youtube.com/watch?v=Bi-v6M4fGbA', 'Rocking', 'Public Message Message has been created.');*/

//Post as a Wall Message
$I = new homeWall($scenario);
$I->public_Wall('Posting a Image', 'Add Photo', 'photo', 'Winter.jpg', '');
$I->public_Wall('Posting a Video', 'Share Video', 'video', '', 'https://www.youtube.com/watch?v=Bi-v6M4fGbA');

//Comment for the Post
$I = new homeWall($scenario);
$I->comment_Wall('RA', 'Cool Video', '');