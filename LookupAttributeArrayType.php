<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'LookupAttributeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Only valid for items catalog-enabled categories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LookupAttributeArrayType.html
 *
 */
class LookupAttributeArrayType extends EbatNs_ComplexType
{
	/**
	 * @var LookupAttributeType
	 */
	protected $LookupAttribute;

	/**
	 * @return LookupAttributeType
	 * @param integer $index 
	 */
	function getLookupAttribute($index = null)
	{
		if ($index !== null) {
			return $this->LookupAttribute[$index];
		} else {
			return $this->LookupAttribute;
		}
	}
	/**
	 * @return void
	 * @param LookupAttributeType $value 
	 * @param  $index 
	 */
	function setLookupAttribute($value, $index = null)
	{
		if ($index !== null) {
			$this->LookupAttribute[$index] = $value;
		} else {
			$this->LookupAttribute = $value;
		}
	}
	/**
	 * @return void
	 * @param LookupAttributeType $value 
	 */
	function addLookupAttribute($value)
	{
		$this->LookupAttribute[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LookupAttributeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LookupAttribute' =>
					array(
						'required' => false,
						'type' => 'LookupAttributeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
