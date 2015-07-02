<?php 
class BlockBuilder extends DataExtension {
     
    private static $db = array(
    );

    public static $has_one = array(
    );

    private static $has_many = array(
        "PageBlocks"    => 'PageBlock'
        // "BlockRows"         => 'BlockRow'
    );
 
    public function updateCMSFields(FieldList $fields) {
        // $fields->addFieldToTab("Root.Social", new TextField("FaceBookLink"));
        // $fields->addFieldToTab("Root.Social", new TextField("TwitterLink"));
        $fields->removeByName("Content");
        // echo '<pre>' . print_r($this->owner, true) . '</pre>';
        // die();
                     
        $gridFieldConfig = GridFieldConfig_PageBlock::create();   
        $gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
        $blocks = DataObject::get("PageBlock")->filter(array("PageID" => $this->owner->ID))->sort("SortOrder");
        $grid = new GridField('PageBlocks','PageBlocks', $blocks ,$gridFieldConfig); 
        $grid->getConfig()->getComponentByType('GridFieldDetailForm')->setValidator(singleton('PageBlock')->getCMSValidator()); 
        $fields->addFieldToTab('Root.Main', $grid, "Metadata");

    }

}