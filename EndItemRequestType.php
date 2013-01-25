<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'EndReasonCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Ends the specified item listing before the date and time at which it would 
 * normally end per the listing duration.&nbsp;<b>Also for Half.com</b>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemRequestType.html
 *
 */
class EndItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var EndReasonCodeType
	 */
	protected $EndingReason;
	/**
	 * @var string
	 */
	protected $SellerInventoryID;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return EndReasonCodeType
	 */
	function getEndingReason()
	{
		return $this->EndingReason;
	}
	/**
	 * @return void
	 * @param EndReasonCodeType $value 
	 */
	function setEndingReason($value)
	{
		$this->EndingReason = $value;
	}
	/**
	 * @return string
	 */
	function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSellerInventoryID($value)
	{
		$this->SellerInventoryID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndingReason' =>
					array(
						'required' => false,
						'type' => 'EndReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerInventoryID' =>
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
