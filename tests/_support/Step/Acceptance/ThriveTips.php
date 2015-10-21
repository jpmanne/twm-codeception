<?php
namespace Step\Acceptance;

class ThriveTips extends \AcceptanceTester
{
	// In this section we are Adding the HTML, Video, Offsite, PDF Thrive Tips.
    public function addContent($title, $dropdown, $type, $html, $videodisc, $url, $offsitedisc, $offurl, $pdfdisc, $upload, $tag, $result)
    {
        $I = $this;
		$I->see('Add content');
		$I->click('Add content');
		$I->click('Thrive Tips');
		$I->fillField('#thrive-tips-node-form input[name=title]', $title);
		$I->selectOption('#edit-field-tip-type-und', $dropdown);
		//Based on Content Type fields are Displayed.
		if($type == 'html') {
			$I->click('Switch to plain text editor');
			$I->fillField('#edit-field-html-content-und-0-value', $html);
		} else if($type == 'video') {
			$I->fillField('#edit-field-description-und-0-value', $videodisc);
			$I->fillField('#edit-field-video-link-und-0-video-url', $url);
		} else if($type == 'offsite') {
			$I->fillField('#edit-field-description-und-0-value', $offsitedisc);
			$I->fillField('#edit-field-link-und-0-value', $offurl);
		} else if($type == 'pdf') {
			$I->fillField('#edit-field-description-und-0-value', $pdfdisc);
			$I->attachFile('#edit-field-select-pdf-file-und-0-upload', $upload);
		}
		$I->fillField('#edit-field-thrive-tags-und', $tag);
		$I->click('Save');
		$I->dontsee('Tip Title field is required.'); // Tip Title Field 
		$I->dontsee('Tags field is required.');		 // Tags 
		$I->dontsee('Tip Type field is required.');  // Tip Type
		$I->dontsee('Video: Invalid Video URL.');    // Video Url
		$I->see($result);
	}
	
	// In this section we are Editing the HTML, Video, Offsite, PDF Thrive Tips.
	public function editContent($title, $edit_title, $type, $edithtml, $videodisc, $editurl, $offsitedisc, $offurl, $pdfdisc, $tag, $result)
    {
        $I = $this;
		$I->click($title);
		$I->see('Edit');
		$I->click('Edit');
		$I->fillField('#thrive-tips-node-form input[name=title]', $edit_title);
		if($type == 'html') {
			$I->click('Switch to plain text editor');
			$I->fillField('#edit-field-html-content-und-0-value', $edithtml);
		} else if($type == 'video') {
			$I->fillField('#edit-field-description-und-0-value', $videodisc);
			$I->fillField('#edit-field-video-link-und-0-video-url', $editurl);
		} else if($type == 'offsite') {
			$I->fillField('#edit-field-description-und-0-value', $offsitedisc);
			$I->fillField('#edit-field-link-und-0-value', $offurl);
		} else if($type == 'pdf') {
			$I->fillField('#edit-field-description-und-0-value', $pdfdisc);
		}
		$I->seeInField('#edit-field-thrive-tags-und', $tag);
		$I->click('Save');
		$I->dontsee('Tip Title field is required.');
		$I->dontsee('Tags field is required.');
		$I->dontsee('Tip Type field is required.');
		$I->dontsee('Video: Invalid Video URL.');
		$I->see($result);
	}
	
	// In this section we are Deleting the HTML, Video, Offsite, PDF Thrive Tips.
	public function deleteContent($title, $result)
    {
        $I = $this;
		$I->click($title);
		$I->click('Edit');
		$I->click('Delete');
		$I->see('This action cannot be undone.'); //Check for confirm Delete button is visible or not.
		$I->click('Delete'); // Delete Alert for particuler tip.
		//$I->click('Cancel');
		$I->see($result);
	}
	
	// Here Participent can Add Comment for a Post, Comment and Flagging to a Post or Comment
	public function userContent($title, $category, $comment, $flag, $updatedflag)
    {
        $I = $this;
		$I->click('Home');
		$I->click($title);
		$I->see($category, 'html/body/div[2]/main/div/article/div[3]/ul/li/a');
		$I->click('Switch to plain text editor');
		$I->fillField('#edit-comment-body-und-0-value', $comment);
		$I->click('Save');
		$I->dontsee('Comment field is required.');
		$I->see('Your comment has been posted.');
		$I->see($comment, '.comment.comment-new.comment-by-viewer.clearfix');
		$I->click($flag);
		$I->see('Flagged Message', $updatedflag);
	}
	
	//Here Participent can Flagging to a comment or post and reply to the comment
	public function flags_user($title, $flag, $verify_flag, $reply_btn, $reply)
    {
        $I = $this;
		$I->click('Home');
		$I->click($title);
		$I->click($flag); //  Flag as objectionable button
		$I->see('Flagged Message', $verify_flag); // Verfication for After Clicking the Flag button
		$i->click($reply_btn); //Comment Reply button
		$I->click('Switch to plain text editor');
		$I->fillField('#edit-field-html-content-und-0-value', $reply);
		$I->click('Save');
		$I->see('Your Comment has been posted.');
		$I->wait(1);
		$I->click('Log out');
	}
	
	// RA User Unflag and Delete the Comment in Flagged Message Page.
	public function flags_RA($title, $comment, $unflag, $delete)
	{
		$I = $this;
		$I->click('Flagged Messages');
		$I->see($title);
		$I->see($comment);
		$I->click($unflag); //un-Flag Comment
		$I->click($delete); //Delete comment
		$I->see('Any replies to this comment will be lost. This action cannot be undone.');
		$I->click('#thrive-tips-node-form input[name=op]', 'Delete');
		$I->see('The comment and all its replies have been deleted.');
	}
}
