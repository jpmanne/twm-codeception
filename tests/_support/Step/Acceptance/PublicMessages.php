<?php
namespace Step\Acceptance;

class  PublicMessages extends \AcceptanceTester
{

	public function public_Wall($text, $dropdown, $type, $image, $url, $type1, $racomment, $upvote, $voted, $R_flag, $cliked_R_flag, $usercomment, $u_vote, $u_voted, $U_flag, $cliked_U_flag) 
	{
		$I = $this;
		$I->fillField(['name' => 'drupal_wall_status'], $text);
		$I->selectOption('#edit-drupal-wall-photo-video-enable', $dropdown);
		if($type == 'photo') {
			//$I->selectOption('#edit-drupal-wall-image-style', $imagestyle);
			$I->attachFile('html/body/div[2]/main/div/form/div/div/div[4]/div/div/input[1]', $image);
			$I->click('#edit-drupal-wall-photo-status-upload-button');
		} else if($type == 'video') {
			$I->fillField('#edit-drupal-wall-video-status', $url);
		}
		$I->click('#edit-drupal-wall-status-post');
		//$I->see('Your post has been saved !');
		if($type1 == 'RA') {
			$I->fillField('#edit-drupal-wall-comment', $racomment);
			$I->click('#edit-drupal-wall-submit');
			$I->click('Home');
			$I->amGoingTo('Click Upvote button for a Post');
			$I->click($upvote);
			//$I->see('Unflag this item', $voted);
			//$I->amGoingTo(' MARKING A POST AS 'FLAG AS OBJECTIONABLE' ');
			//$I->click($R_flag);
			//$I->see('Un-flag', $cliked_R_flag);
		} else if($type1 == 'Participent') {
			$I->fillField('#edit-drupal-wall-comment--4', $usercomment);
			$I->click('#edit-drupal-wall-submit--4');
			$I->click('Home');
			$I->click($u_vote);
			//$I->see('Voted', $u_voted);
			$I->click($U_flag);
			//$I->see('Flagged Message', $cliked_U_flag);
		}
	}
	
	public function achievement($upvote, $upvote2, $upvote3) 
	{
		$I = $this;
		$I->click('My account');
		$I->click('Achievements');
		$I->see('user2 is ranked #0 with 0 points. 0 of 5 achievements have been unlocked.');
		$I->click('Home');
		$I->click($upvote);
		$I->click($upvote2);
		$I->click($upvote3);
		$I->reloadPage();
		$I->click('My account');
		$I->click('Achievements');
		$I->see('2 of 5 achievements have been unlocked.');
		//$I->see('.achievement-unlocked-rank');
		//$I->see('.achievement-unlocked-rank');
	}	
}
