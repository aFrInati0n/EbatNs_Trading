<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomCategoryType.php';

/**
 * Set of custom categories for the Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomCategoryArrayType.html
 *
 */
class StoreCustomCategoryArrayType extends EbatNs_ComplexType
{
	/**
	 * @var StoreCustomCategoryType
	 */
	protected $CustomCategory;

	/**
	 * @return StoreCustomCategoryType
	 * @param integer $index 
	 */
	function getCustomCategory($index = null)
	{
		if ($index !== null) {
			return $this->CustomCategory[$index];
		} else {
			return $this->CustomCategory;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomCategoryType $value 
	 * @param  $index 
	 */
	function setCustomCategory($value, $index = null)
	{
		if ($index !== null) {
			$this->CustomCategory[$index] = $value;
		} else {
			$this->CustomCategory = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomCategoryType $value 
	 */
	function addCustomCategory($value)
	{
		$this->CustomCategory[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomCategoryArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CustomCategory' =>
					array(
						'required' => false,
						'type' => 'StoreCustomCategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
