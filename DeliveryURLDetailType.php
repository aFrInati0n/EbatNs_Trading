<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'EnableCodeType.php';

/**
 * Defines settings for a notification URL (including the URL name in 
 * DeliveryURLName). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeliveryURLDetailType.html
 *
 */
class DeliveryURLDetailType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DeliveryURLName;
	/**
	 * @var anyURI
	 */
	protected $DeliveryURL;
	/**
	 * @var EnableCodeType
	 */
	protected $Status;

	/**
	 * @return string
	 */
	function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDeliveryURLName($value)
	{
		$this->DeliveryURLName = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDeliveryURL($value)
	{
		$this->DeliveryURL = $value;
	}
	/**
	 * @return EnableCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param EnableCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeliveryURLDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DeliveryURLName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'EnableCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
