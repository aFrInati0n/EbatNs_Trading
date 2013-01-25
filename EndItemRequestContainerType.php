<?php
// autogenerated file 22.07.2011 09:10
// $Id: $
// $Log: $
//
//
require_once 'EndReasonCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';

/**
 * A container to specify a single eBay item to end. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemRequestContainerType.html
 *
 */
class EndItemRequestContainerType extends EbatNs_ComplexType
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
	protected $MessageID;
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
		parent::__construct('EndItemRequestContainerType', 'urn:ebay:apis:eBLBaseComponents');
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
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
