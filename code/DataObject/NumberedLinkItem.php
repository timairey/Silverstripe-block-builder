<?php
class NumberedLinkItem extends DataObject {

	private static $db = array(
		'Title' 		=> 'Varchar',
		'Number'		=> 'Int',
		'SortOrder'		=> 'Int'
	);

	private static $has_one = array(
		'BlockWidgetNumberedLinkBlock' => 'BlockWidgetNumberedLinkBlock',
		'TargetPage'				   => 'SiteTree'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("SortOrder");
		$fields->removeByName("BlockWidgetNumberedLinkBlockID");

		$fields->replaceField("TargetPageID", new TreeDropdownField("TargetPageID", "Team Member Page", "SiteTree"));

		return $fields;
	}
}