<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Details the shipping carrier and shipment tracking number associated with 
 * apackage shipment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShipmentTrackingDetailsType.html
 *
 */
class ShipmentTrackingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ShippingCarrierUsed;
	/**
	 * @var string
	 */
	protected $ShipmentTrackingNumber;

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
	function getShipmentTrackingNumber()
	{
		return $this->ShipmentTrackingNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShipmentTrackingNumber($value)
	{
		$this->ShipmentTrackingNumber = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShipmentTrackingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingCarrierUsed' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipmentTrackingNumber' =>
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
