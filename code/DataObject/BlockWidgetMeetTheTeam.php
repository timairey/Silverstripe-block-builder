<?php
class BlockWidgetMeetTheTeam extends PageBlock {

	private static $db = array(
		'Title' => 'Varchar'
	);

	private static $singular_name = "Meet the Team Block";

	private static $has_many = array(
		'TeamMembers' => 'TeamMember'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName("TeamMembers");
		$fields->addFieldToTab("Root.Main", new HeaderField("Team Members", "Team Members"));
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();   
	    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
	    // $gridFieldConfig->addComponent(new GridFieldEditableColumns());
	    $grid = new GridField('TeamMembers','TeamMembers', $this->TeamMembers()->sort("SortOrder"),$gridFieldConfig);
	    $grid->getConfig()->getComponentByType('GridFieldAddNewButton')->setButtonName("Add a Team Member"); 

		// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
		$fields->addFieldToTab('Root.Main', $grid);

		return $fields;
	}
}