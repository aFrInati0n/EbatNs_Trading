<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Defines a single new item and lists it on a specified eBay site.&nbsp;<b>Also 
 * for Half.com</b>.Returns the item ID for the new listing, and returns fees the 
 * seller will incur for thelisting (not including the Final Value Fee, which 
 * cannot be calculated untilthe item is sold). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddItemRequestType.html
 *
 */
class AddItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
