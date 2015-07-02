// <?php
// class BlockWidgetTab extends PageBlock {

// 	private static $db = array(
// 		'Title' => 'Varchar'
// 	);

// 	private static $singular_name = "Tab Block";

// 	private static $has_many = array(
// 		'Items' => 'BlockWidgetTabItem'
// 	);

// 	function getCMSFields() {
// 		$fields = parent::getCMSFields();

// 		$fields->removeByName("Items");
// 		if ($this->ID){
// 			$fields->addFieldToTab("Root.Main", new HeaderField("Tabs", "Tabs"));
// 			$gridFieldConfig = GridFieldConfig_RecordEditor::create();   
// 		    $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
// 		    // $gridFieldConfig->addComponent(new GridFieldEditableColumns());
// 		    $grid = new GridField('Items','Items', $this->Items()->sort("SortOrder"),$gridFieldConfig);
// 		    $grid->getConfig()->getComponentByType('GridFieldAddNewButton')->setButtonName("Add a new Tab"); 

// 			// $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('BlockWidgetAccordionItem')->getCMSValidator()); 
// 			$fields->addFieldToTab('Root.Main', $grid);
// 		}

// 		return $fields;
// 	}
// }