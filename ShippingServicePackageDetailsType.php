<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'ShippingPackageCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Packages supported by the enclosing shipping service. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingServicePackageDetailsType.html
 *
 */
class ShippingServicePackageDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var ShippingPackageCodeType
	 */
	protected $Name;
	/**
	 * @var boolean
	 */
	protected $DimensionsRequired;

	/**
	 * @return ShippingPackageCodeType
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param ShippingPackageCodeType $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return boolean
	 */
	function getDimensionsRequired()
	{
		return $this->DimensionsRequired;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDimensionsRequired($value)
	{
		$this->DimensionsRequired = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingServicePackageDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'ShippingPackageCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DimensionsRequired' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
