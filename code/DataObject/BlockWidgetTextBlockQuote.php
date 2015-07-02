<?php
class BlockWidgetTextBlockQuote extends PageBlock {

	private static $db = array(
		'Title' 		=> 'Varchar',
		'Content' 		=> 'HTMLText',
		'Quote'			=> 'Text',
		'QuotePosition'	=> "Enum(array('Left','Right'))"
	);

	private static $singular_name = "Text and Block Quote Block";

	private static  $has_one = array(
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("Images");
		$fields->replaceField("Content", new HTMLEditorField("Content"));

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}