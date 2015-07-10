<?php 
class BlockBuilder extends DataExtension {
     
    private static $db = array(
    );

    public static $has_one = array(
    );

    private static $has_many = array(
        "PageBlocks"    => 'PageBlock'
    );
 
    public function updateCMSFields(FieldList $fields) {                 
        // only show block bulder on selected pages
        // if all pages want block builder, then set the var on SiteTree.
        if ($this->owner->config()->UseBlockBuilder){
            $fields->removeByName("Content");
                        
            $gridFieldConfig = GridFieldConfig_PageBlock::create();   
            $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
            $blocks = DataObject::get("PageBlock")->filter(array("PageID" => $this->owner->ID))->sort("SortOrder");
            $grid = new GridField('PageBlocks','PageBlocks', $blocks ,$gridFieldConfig); 
            $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('PageBlock')->getCMSValidator()); 
            $fields->addFieldToTab('Root.Main', $grid, "Metadata");
        }
    }

}