<?php
namespace Step\Acceptance;

class Reminders extends \AcceptanceTester
{
    public function reminder($time, $meridiem, $mess)
    {
		$I = $this;
		$I->amGoingTo('SET REMINDER');
		$I->selectOption('#edit-send-daily-hours', $time);
		$I->selectOption('#edit-send-daily-meridiem', $meridiem);
		$I->fillField('#edit-message', $mess);
		$I->click('Save Settings');
		$I->see('Reminder Details Successfully Saved In Drupal.');
		$I->dontsee('Message: field is required.');	
		$I->expect('REMINDER SET SUCCESSFUL');
    }
}
