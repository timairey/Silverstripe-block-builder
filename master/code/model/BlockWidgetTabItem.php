<?php
class BlockWidgetTabItem extends DataObject {

	private static $db = array(
		'Title' => 'Varchar',
		'Content' => 'HTMLText'
	);

	private static $has_one = array(
		'Tab' => 'BlockWidgetTab'
	);
}