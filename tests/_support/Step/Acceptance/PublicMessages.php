<?php
namespace Step\Acceptance;

class  PublicMessages extends \AcceptanceTester
{
	// In this Section, RA/User can post and Comment on page and he will cliking on Upvote, Flag as Objectionable button for post.
	public function public_Wall($text, $dropdown, $type, $image, $url, $type1, $racomment, $upvote, $voted, $R_flag, $cliked_R_flag, $usercomment, $u_vote, $u_voted, $U_flag, $cliked_U_flag) 
	{
		$I = $this;
		$I->amGoingTo('POST PUBLIC MESSAGE OF IMAGE CATEGORY');
		$I->click('Home');
		$I->fillField('html/body/div[2]/main/div/form/div/div/div[1]/div/textarea', $text);
		$I->selectOption('html/body/div[2]/main/div/form/div/div/div[2]/select', $dropdown);
		if($type == 'photo') {
			//$I->selectOption('#edit-drupal-wall-image-style', $imagestyle);
			$I->attachFile('html/body/div[2]/main/div/form/div/div/div[4]/div/div/input[1]', $image);
			$I->click('#edit-drupal-wall-photo-status-upload-button');
		} else if($type == 'video') {
			$I->fillField('#edit-drupal-wall-video-status', $url);
		}
		$I->click('#edit-drupal-wall-status-post');
		$I->expect('PUBLIC MESSAGE POSTED SUCCESSFULLY');
		//$I->see('Your post has been saved !');
		if($type1 == 'RA') {
			$I->fillField('#edit-drupal-wall-comment', $racomment);
			$I->click('#edit-drupal-wall-submit');
			$I->click('Home');
			$I->amGoingTo('CLICK UPVOTE BUTTON FOR A POST');
			$I->click($upvote);
			//$I->see('Voted', $voted);
			$I->amGoingTo('CLICK FLAG AS OBJECTIONABLE BUTTON FOR A POST');
			$I->click($R_flag);
			//$I->see('Unflag', $cliked_R_flag);
			$I->expect('UPVOTE AND FLAG BUTTONS ARE CLICKED');
		} else if($type1 == 'Participent') {
			$I->fillField('#edit-drupal-wall-comment--4', $usercomment);
			$I->click('#edit-drupal-wall-submit--4');
			$I->click('Home');
			$I->amGoingTo('CLICK UPVOTE BUTTON FOR A POST');
			$I->click($u_vote);
			$I->see('Voted', $u_voted);
			$I->amGoingTo('CLICK FLAG AS OBJECTIONABLE BUTTON FOR A POST');
			$I->click($U_flag);
			$I->see('Flagged Message', $cliked_U_flag);
			$I->expect('UPVOTE AND FLAG BUTTONS ARE CLICKED');
		}
	}
}
