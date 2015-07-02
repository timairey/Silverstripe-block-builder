<?php
class BlockWidgetAccordion extends PageBlock {

	private static $db = array(
		'Title' => 'Varchar'
	);

	private static $singular_name = "Accordion Block";

	private static $has_many = array(
		'Items' => 'BlockWidgetAccordionItem'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("Items");
		$fields->addFieldToTab("Root.Main", new HeaderField("Accordion Items", "Accordion Items"));
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();   
	    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
	    // $gridFieldConfig->addComponent(new GridFieldEditableColumns());
	    $grid = new GridField('Items','Items', $this->Items()->sort("SortOrder"),$gridFieldConfig);
	    $grid->getConfig()->getComponentByType('GridFieldAddNewButton')->setButtonName("Add an Accordion Item"); 

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		$fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}