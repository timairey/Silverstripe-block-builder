<?php
class BlockWidgetText extends PageBlock {

	private static $db = array(
		'Title' => 'Varchar',
		'Content' => 'HTMLText'
	);
	private static $singular_name = "Text Block";

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->replaceField("Content", new HTMLEditorField("Content"));

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}