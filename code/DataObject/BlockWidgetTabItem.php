<?php
class BlockWidgetTabItem extends DataObject {

	private static $db = array(
		'Title' 	=> 'Varchar',
		'Content' 	=> 'HTMLText',
		'SortOrder'	=> 'Int'
	);

	private static $has_one = array(
		'Tab' => 'BlockWidgetTab'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("SortOrder");
		$fields->removeByName("TabID");

		return $fields;
	}
}