<?php
class BlockWidgetHeading extends PageBlock {

	private static $db = array(
		'Title' 		=> 'Varchar',
		'Heading'		=> 'Varchar(255)',
		'HeadingClass'	=> "Enum(array('h1','h2','h3'))"
	);
	private static $singular_name = "Heading Block";

	function getCMSFields() {
		$fields = parent::getCMSFields();

		// $fields->replaceField("Content", new HTMLEditorField("Content"));

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}