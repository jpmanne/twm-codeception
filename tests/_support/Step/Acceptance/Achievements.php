<?php
namespace Step\Acceptance;

class  Achievements extends \AcceptanceTester
{
	// Checks for Vote for 3 post achivment is unlocked or not.
	public function achievement($v_date, $p_date, $upvote, $upvote2, $upvote3, $date)
	{
		$I = $this;
		$I->amGoingTo('CHECK ACHIEVEMENTS ARE LOCKED/UNLOCKED');
		$I->click('My account');
		$I->click('Achievements');
		$I->dontSee($date, $v_date);  // Check Votes achievement is Locked or Unlocked
		$I->dontSee($date, $p_date);  // Check Posts achievement is Locked or Unlocked
		$I->click('Home');
		// Send the Posts for 5 Comments
		$I->amGoingTo('POSTS FOR 5 COMMENTS');
		$I->fillField('#edit-drupal-wall-comment--3','comment post');
        $I->click('#edit-drupal-wall-submit--3');
		//$I->wait(2);
		$I->fillField('#edit-drupal-wall-comment--4','comment post-2');
		$I->click('#edit-drupal-wall-submit--4');
		//$I->wait(2);
		$I->fillField('#edit-drupal-wall-comment--5','comment post-3');
		$I->click('#edit-drupal-wall-submit--5');
		//$I->wait(2);
		$I->fillField('#edit-drupal-wall-comment--6','comment post-4');
		$I->click('#edit-drupal-wall-submit--6');
		//$I->wait(2);
		$I->fillField('#edit-drupal-wall-comment--7','comment post-5');
		$I->click('#edit-drupal-wall-submit--7');
		//$I->wait(2);
		$I->expect('SUCCESSFULLY DONE WITH THE POSTS');
		// Clicking for 3 Upvote Buttons
		$I->amGoingTo('CLICKING ON 3 UPVOTE BUTTONS');
		$I->click($upvote);
		//$I->wait(1);
		$I->click($upvote2);
		//$I->wait(1);
		$I->click($upvote3);
		//$I->wait(1);
		$I->expect('CLICKED THE 3 BUTTONS');
		// Check Posts and Votes achievements in unlocked status
		$I->amGoingTo('CHECK THE POSTS AND VOTES ACHIEVEMENTS UNLOCKED USING DATE');
		$I->click('My account');
		$I->click('Achievements');
		$vote_achmnt = $I->grabTextFrom($v_date);  // Grab the text from Votes Achievement Unlocked date
		$postachmnt = $I->grabTextFrom($p_date);  // Grab the text from Posts Achievement Unlocked date
		if ($postachmnt == '2015/11/04') {
			$I->See($postachmnt);  // Displaying the Posts Achievement Unlocked Date
			if ($vote_achmnt == $date) {
				$I->See($vote_achmnt);  // Displaying the Votes Achievement Unlocked Date
				$I->expect('POSTS AND VOTES ACHIEVEMENTS ARE UNLOCKED');
			} else if ($postachmnt != '2015/11/04') {
				$I->expect('ACHIEVEMENTS ARE NOT UNLOCKED');
			}
		}
	}	
}
