<?php
 
class PageBlock extends DataObject {
 
  
  private static $db = array(	
    "Name"      => 'Varchar(255)',
    "ShowTitle" => 'Boolean',
    "SortOrder" => 'Int'
  );
 
  // One-to-one relationship with gallery page
  private static $has_one = array(
    'Page'  => 'SiteTree'
  );

  private static $defaults = array(
    "ShowTitle" => true
  );

 
 // tidy up the CMS by not showing these fields
  public function getCMSFields() {
 		$fields = parent::getCMSFields();
		$fields->removeFieldFromTab("Root.Main","PageID");
    $fields->removeFieldFromTab("Root.Main","SortOrder");
    $fields->replaceField("Content", new TextAreaField("Content"));
    $fields->addFieldToTab("Root.Main", new CheckboxField("ShowTitle"), "Title");
		return $fields;		
  }
  
  // Tell the datagrid what fields to show in the table
   private static $summary_fields = array( 
	   'Name' => 'Name'
   );
   public function getCMSValidator() { 
      return new PageBlock_Validator(); 
    } 

    public function getValidator() { 
      return new PageBlock_Validator(); 
    } 

    public function Output(){
      return $this->renderWith($this->ClassName);
    }
  
}

class PageBlock_Validator extends RequiredFields { 
   function php($data) { 
      $bRet = parent::php($data);
        // if (empty($data['Name'])) { 
        //     $this->validationError('Name','Name is required',"required"); 
        //     $bRet = false; 
        // }

        // if (empty($data['Content'])) { 
        //  $this->validationError('Content','Content is required',"required"); 
        //  $bRet = false; 
        // }

        return $bRet; 
   } 
}