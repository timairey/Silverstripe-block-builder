<?php
class BlockRow extends DataObject {

	private static $db = array(
		"SortOrder"	=> "Int"
	);

	private static $has_many = array(
		'Columns' => 'BlockColumn'
	);

	private static $has_one = array(
		"Page"		=> "Page"
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("SortOrder");
		$fields->removeByName("PageID");

		$gridFieldConfig = GridFieldConfig_RecordEditor::create();   
	    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
	    $grid = new GridField('Columns','Columns', $this->Columns()->sort("SortOrder"),$gridFieldConfig); 
		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockColumn')->getCMSValidator()); 
		$fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}