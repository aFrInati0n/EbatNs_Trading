<?php
// autogenerated file 09.05.2012 12:52
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Created this container as part of quantity fix for tickets in selling API.Using 
 * this container, a seller can supply original retail price, discount price foran 
 * item to provide discount treatment. STP in short for Strike-Through Pricing 
 * willonly apply to fixed price, BIN items. This feature is available for large 
 * enterprise/BD sellers via white list. A seller can provide discount treatmentfor 
 * Non-MSKU and MSKU items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/QuantityInfoType.html
 *
 */
class QuantityInfoType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MinimumRemnantSet;

	/**
	 * @return int
	 */
	function getMinimumRemnantSet()
	{
		return $this->MinimumRemnantSet;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMinimumRemnantSet($value)
	{
		$this->MinimumRemnantSet = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('QuantityInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MinimumRemnantSet' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>