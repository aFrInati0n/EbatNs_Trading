<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'AttributeSetArrayType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Item Specifics data returned from the Suggested Attributes engine. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeRecommendationsType.html
 *
 */
class AttributeRecommendationsType extends EbatNs_ComplexType
{
	/**
	 * @var AttributeSetArrayType
	 */
	protected $AttributeSetArray;

	/**
	 * @return AttributeSetArrayType
	 */
	function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
	}
	/**
	 * @return void
	 * @param AttributeSetArrayType $value 
	 */
	function setAttributeSetArray($value)
	{
		$this->AttributeSetArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeSetArray' =>
					array(
						'required' => false,
						'type' => 'AttributeSetArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
