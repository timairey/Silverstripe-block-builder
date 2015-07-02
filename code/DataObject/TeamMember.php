<?php
class TeamMember extends DataObject {

	private static $db = array(
		'Name' 		=> 'Varchar',
		'JobTitle'	=> 'Varchar',
		'SortOrder'	=> 'Int'
	);

	private static $has_one = array(
		'TeamMemberPage'			=> 'SiteTree',
		"BlockWidgetMeetTheTeam"	=> "BlockWidgetMeetTheTeam",
		'TeamMemberPhoto'			=> 'Image'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("SortOrder");
		$fields->removeByName("BlockWidgetMeetTheTeam");

		$fields->replaceField("TeamMemberPageID", new TreeDropdownField("TeamMemberPageID", "Team Member Page", "SiteTree"));

		return $fields;
	}
}