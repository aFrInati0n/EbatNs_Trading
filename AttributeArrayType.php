<?php
// autogenerated file 22.07.2011 09:10
// $Id: $
// $Log: $
//
//
require_once 'AttributeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Reserved for future use. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AttributeArrayType.html
 *
 */
class AttributeArrayType extends EbatNs_ComplexType
{
	/**
	 * @var AttributeType
	 */
	protected $Attribute;

	/**
	 * @return AttributeType
	 * @param integer $index 
	 */
	function getAttribute($index = null)
	{
		if ($index !== null) {
			return $this->Attribute[$index];
		} else {
			return $this->Attribute;
		}
	}
	/**
	 * @return void
	 * @param AttributeType $value 
	 * @param  $index 
	 */
	function setAttribute($value, $index = null)
	{
		if ($index !== null) {
			$this->Attribute[$index] = $value;
		} else {
			$this->Attribute = $value;
		}
	}
	/**
	 * @return void
	 * @param AttributeType $value 
	 */
	function addAttribute($value)
	{
		$this->Attribute[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AttributeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Attribute' =>
					array(
						'required' => false,
						'type' => 'AttributeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
