<?php
class BlockWidgetGallery extends PageBlock {

	private static $db = array(
		'Title' => 'Varchar'
	);

	private static $singular_name = "Gallery Block";

	private static $has_many = array(
		'Images' => 'GalleryBlockImage'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("Images");
		if ($this->ID){
			$fields->addFieldToTab("Root.Main", new HeaderField("Images", "Images"));
			$gridFieldConfig = GridFieldConfig_RecordEditor::create();   
		    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
		    // $gridFieldConfig->addComponent(new GridFieldEditableColumns());
		    $grid = new GridField('Images','Images', $this->Images()->sort("SortOrder"),$gridFieldConfig);
		    $grid->getConfig()->getComponentByType('GridFieldAddNewButton')->setButtonName("Add an Image"); 

			// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
			$fields->addFieldToTab('Root.Main', $grid);
		}

		return $fields;
	}
}