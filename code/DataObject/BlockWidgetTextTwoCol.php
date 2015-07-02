<?php
class BlockWidgetTextTwoCol extends PageBlock {

	private static $db = array(
		'Title' 		=> 'Varchar',
		'LeftContent' 	=> 'HTMLText',
		'RightContent' 	=> 'HTMLText'
	);
	private static $singular_name = "Two Column Text Block";

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->replaceField("LeftContent", new HTMLEditorField("LeftContent"));
		$fields->replaceField("RightContent", new HTMLEditorField("RightContent"));

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}