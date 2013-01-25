<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Creates listings from Selling Manager templates.This call is subject to change 
 * without notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddItemFromSellingManagerTemplateRequestType.html
 *
 */
class AddItemFromSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;
	/**
	 * @var dateTime
	 */
	protected $ScheduleTime;
	/**
	 * @var ItemType
	 */
	protected $Item;

	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getScheduleTime()
	{
		return $this->ScheduleTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setScheduleTime($value)
	{
		$this->ScheduleTime = $value;
	}
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
		parent::__construct('AddItemFromSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ScheduleTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
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
