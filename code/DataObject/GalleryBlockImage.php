<?php
class GalleryBlockImage extends DataObject {

	private static $db = array(
		'Title' 	=> 'Varchar',
		'SortOrder'	=> 'Int'
	);

	private static $singular_name = "Gallery Block Image";

	private static $has_one = array(
		'Image' 				=> 'Image',
		'BlockWidgetGallery'	=> 'BlockWidgetGallery'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("BlockWidgetGalleryID");
		$fields->removeByName("Name");
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