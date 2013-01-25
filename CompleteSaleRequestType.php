<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'ListingTypeCodeType.php';
require_once 'ShipmentType.php';
require_once 'FeedbackInfoType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a seller to do various tasks after the creation of a single line item 
 * ormultiple line item (Combined Payment) order. Typically, this call is used 
 * after the order has been paidby the buyer, but it can be called by the seller 
 * beforehand. Typical post-payment tasks available to this call include marking 
 * the order as paid, markingthe order as shipped, providing shipment tracking 
 * details, and leaving feedbackfor the buyer. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CompleteSaleRequestType.html
 *
 */
class CompleteSaleRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var FeedbackInfoType
	 */
	protected $FeedbackInfo;
	/**
	 * @var boolean
	 */
	protected $Shipped;
	/**
	 * @var boolean
	 */
	protected $Paid;
	/**
	 * @var ListingTypeCodeType
	 */
	protected $ListingType;
	/**
	 * @var ShipmentType
	 */
	protected $Shipment;
	/**
	 * @var string
	 */
	protected $OrderID;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

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
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return FeedbackInfoType
	 */
	function getFeedbackInfo()
	{
		return $this->FeedbackInfo;
	}
	/**
	 * @return void
	 * @param FeedbackInfoType $value 
	 */
	function setFeedbackInfo($value)
	{
		$this->FeedbackInfo = $value;
	}
	/**
	 * @return boolean
	 */
	function getShipped()
	{
		return $this->Shipped;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShipped($value)
	{
		$this->Shipped = $value;
	}
	/**
	 * @return boolean
	 */
	function getPaid()
	{
		return $this->Paid;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPaid($value)
	{
		$this->Paid = $value;
	}
	/**
	 * @return ListingTypeCodeType
	 */
	function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * @return void
	 * @param ListingTypeCodeType $value 
	 */
	function setListingType($value)
	{
		$this->ListingType = $value;
	}
	/**
	 * @return ShipmentType
	 */
	function getShipment()
	{
		return $this->Shipment;
	}
	/**
	 * @return void
	 * @param ShipmentType $value 
	 */
	function setShipment($value)
	{
		$this->Shipment = $value;
	}
	/**
	 * @return string
	 */
	function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderID($value)
	{
		$this->OrderID = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CompleteSaleRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackInfo' =>
					array(
						'required' => false,
						'type' => 'FeedbackInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Shipped' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Paid' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingType' =>
					array(
						'required' => false,
						'type' => 'ListingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Shipment' =>
					array(
						'required' => false,
						'type' => 'ShipmentType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
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
