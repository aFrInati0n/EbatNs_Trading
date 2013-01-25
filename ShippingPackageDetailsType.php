<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'ShippingPackageCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Details about type of package used to ship an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingPackageDetailsType.html
 *
 */
class ShippingPackageDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $PackageID;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var ShippingPackageCodeType
	 */
	protected $ShippingPackage;
	/**
	 * @var boolean
	 */
	protected $DefaultValue;
	/**
	 * @var boolean
	 */
	protected $DimensionsSupported;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return int
	 */
	function getPackageID()
	{
		return $this->PackageID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPackageID($value)
	{
		$this->PackageID = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return ShippingPackageCodeType
	 */
	function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * @return void
	 * @param ShippingPackageCodeType $value 
	 */
	function setShippingPackage($value)
	{
		$this->ShippingPackage = $value;
	}
	/**
	 * @return boolean
	 */
	function getDefaultValue()
	{
		return $this->DefaultValue;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDefaultValue($value)
	{
		$this->DefaultValue = $value;
	}
	/**
	 * @return boolean
	 */
	function getDimensionsSupported()
	{
		return $this->DimensionsSupported;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDimensionsSupported($value)
	{
		$this->DimensionsSupported = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingPackageDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PackageID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingPackage' =>
					array(
						'required' => false,
						'type' => 'ShippingPackageCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DefaultValue' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DimensionsSupported' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
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
