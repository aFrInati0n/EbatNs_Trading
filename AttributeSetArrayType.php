<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AttributeSetType.php';

/**
 * Applicable for listings that include eBay's Item Specifics or Pre-filled 
 * ItemInformation features. A list of attribute sets. An attribute set contains a 
 * listof attributes that describe category-specific aspects or features of an item 
 * in astandardized way. See the Developer's Guide for more information. In 
 * item-listingrequests, this property is required if attributes are identified as 
 * required inthe characteristics set meta-data. See the Developer's Guide for 
 * information aboutcharacteristics meta-data and how to determine when attributes 
 * are required. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeSetArrayType.html
 *
 */
class AttributeSetArrayType extends EbatNs_ComplexType
{
	/**
	 * @var AttributeSetType
	 */
	protected $AttributeSet;

	/**
	 * @return AttributeSetType
	 * @param integer $index 
	 */
	function getAttributeSet($index = null)
	{
		if ($index !== null) {
			return $this->AttributeSet[$index];
		} else {
			return $this->AttributeSet;
		}
	}
	/**
	 * @return void
	 * @param AttributeSetType $value 
	 * @param  $index 
	 */
	function setAttributeSet($value, $index = null)
	{
		if ($index !== null) {
			$this->AttributeSet[$index] = $value;
		} else {
			$this->AttributeSet = $value;
		}
	}
	/**
	 * @return void
	 * @param AttributeSetType $value 
	 */
	function addAttributeSet($value)
	{
		$this->AttributeSet[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeSetArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeSet' =>
					array(
						'required' => false,
						'type' => 'AttributeSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
