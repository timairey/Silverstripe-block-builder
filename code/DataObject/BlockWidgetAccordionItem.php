<?php
class BlockWidgetAccordionItem extends DataObject {

	private static $db = array(
		'Title' 		=> 'Varchar',
		'Content' 		=> 'HTMLText',
		'SortOrder'		=> 'Int'
	);

	private static $has_one = array(
		'Accordion' => 'BlockWidgetAccordion'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("SortOrder");
		$fields->removeByName("AccordionID");

		return $fields;
	}
}