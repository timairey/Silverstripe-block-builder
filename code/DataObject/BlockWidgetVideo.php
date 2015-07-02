<?php
class BlockWidgetVideo extends PageBlock {

	private static $db = array(
		'Title' => 'Varchar',
		'VideoURL' => 'VarChar(255)'
	);

	private static $has_one = array(
		"VideoPreviewImage"	=> 'Image'
	);

	private static $singular_name = "Video Block";

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("BlockWidgetGalleryID");
		$fields->removeByName("Name");
		$fields->removeByName("ShowTitle");
		// $fields->addFieldToTab("Root.Main", new HeaderField("Accordion Items", "Accordrion Items"));
		// $gridFieldConfig = GridFieldConfig_RecordEditor::create();   
	 //    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
	 //    // $gridFieldConfig->addComponent(new GridFieldEditableColumns());
	 //    $grid = new GridField('Items','Items', $this->Items()->sort("SortOrder"),$gridFieldConfig);
	 //    $grid->getConfig()->getComponentByType('GridFieldAddNewButton')->setButtonName("Add an Accordion Item"); 

		// // $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		// $fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}