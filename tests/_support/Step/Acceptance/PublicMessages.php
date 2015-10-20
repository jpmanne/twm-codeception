<?php
namespace Step\Acceptance;

class  PublicMessages extends \AcceptanceTester
{

	public function public_Wall($text, $dropdown, $type, $image, $url) 
	{
		$I = $this;
		$I->fillField('#edit-drupal-wall-status', $text);
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
	}
	
	public function comment_Wall($type, $racomment, $usercomment) 
	{
		$I = $this;
		if($type == 'RA') {
			$I->fillField('#edit-drupal-wall-comment', $racomment);
			$I->click('#edit-drupal-wall-submit');
			$I->see('Flag as objectionable', 'html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[3]/span/a');
			$I->click('html/body/div[2]/main/div/fieldset/div/div[1]/div[3]/div[3]/span/a');
		} else if($type == 'Participent') {
			$I->fillField('#edit-drupal-wall-comment--2', $usercomment);
			$I->click('#edit-drupal-wall-submit');
			$I->see('Flag as objectionable', 'html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[2]/span/a');
			$I->click('html/body/div[2]/main/div/fieldset/div/div[2]/div[3]/div[2]/span/a');
		}
		
	}
}