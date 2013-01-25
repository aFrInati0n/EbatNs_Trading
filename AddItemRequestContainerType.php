<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';

/**
 * Similar to AddItemRequestType, the AddItemRequestContainerType defines a single 
 * item to be listed. The AddItems request will support up to five (5) 
 * requestcontainers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddItemRequestContainerType.html
 *
 */
class AddItemRequestContainerType extends EbatNs_ComplexType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var string
	 */
	protected $MessageID;

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
	 * @return string
	 */
	function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddItemRequestContainerType', 'urn:ebay:apis:eBLBaseComponents');
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
					),
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
