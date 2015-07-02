<?php
class BlockWidgetSoloImage extends PageBlock {

	private static $db = array(
		'Title' 		=> 'Varchar',
	);

	private static $singular_name = "Image Block";

	private static  $has_one = array(
		'Image' => 'Image'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}