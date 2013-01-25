<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'DisputeIDType.php';
require_once 'DisputeActivityCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Allows a seller to respond to or close an Item Not Received dispute.This can be 
 * used to add a comment to an Unpaid Item Disputeonly if the request version was 
 * lower than 637 when thedispute was created. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddDisputeResponseRequestType.html
 *
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{
	/**
	 * @var DisputeIDType
	 */
	protected $DisputeID;
	/**
	 * @var string
	 */
	protected $MessageText;
	/**
	 * @var DisputeActivityCodeType
	 */
	protected $DisputeActivity;
	/**
	 * @var string
	 */
	protected $ShippingCarrierUsed;
	/**
	 * @var string
	 */
	protected $ShipmentTrackNumber;
	/**
	 * @var dateTime
	 */
	protected $ShippingTime;

	/**
	 * @return DisputeIDType
	 */
	function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}
	/**
	 * @return string
	 */
	function getMessageText()
	{
		return $this->MessageText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageText($value)
	{
		$this->MessageText = $value;
	}
	/**
	 * @return DisputeActivityCodeType
	 */
	function getDisputeActivity()
	{
		return $this->DisputeActivity;
	}
	/**
	 * @return void
	 * @param DisputeActivityCodeType $value 
	 */
	function setDisputeActivity($value)
	{
		$this->DisputeActivity = $value;
	}
	/**
	 * @return string
	 */
	function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingCarrierUsed($value)
	{
		$this->ShippingCarrierUsed = $value;
	}
	/**
	 * @return string
	 */
	function getShipmentTrackNumber()
	{
		return $this->ShipmentTrackNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShipmentTrackNumber($value)
	{
		$this->ShipmentTrackNumber = $value;
	}
	/**
	 * @return dateTime
	 */
	function getShippingTime()
	{
		return $this->ShippingTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setShippingTime($value)
	{
		$this->ShippingTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddDisputeResponseRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeActivity' =>
					array(
						'required' => false,
						'type' => 'DisputeActivityCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCarrierUsed' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipmentTrackNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
