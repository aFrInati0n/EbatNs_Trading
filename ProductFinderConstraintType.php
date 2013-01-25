<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * An attribute (constraint) that was specified in a search request that wasbased 
 * on a product finder query. Used to help you map each query in a batchrequest to 
 * the corresponding search result in the response. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductFinderConstraintType.html
 *
 */
class ProductFinderConstraintType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $DisplayName;
	/**
	 * @var string
	 */
	protected $DisplayValue;

	/**
	 * @return string
	 */
	function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplayName($value)
	{
		$this->DisplayName = $value;
	}
	/**
	 * @return string
	 */
	function getDisplayValue()
	{
		return $this->DisplayValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDisplayValue($value)
	{
		$this->DisplayValue = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductFinderConstraintType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisplayName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayValue' =>
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
