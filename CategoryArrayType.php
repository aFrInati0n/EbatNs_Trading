<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CategoryType.php';

/**
 * Container for a list of categories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryArrayType.html
 *
 */
class CategoryArrayType extends EbatNs_ComplexType
{
	/**
	 * @var CategoryType
	 */
	protected $Category;

	/**
	 * @return CategoryType
	 * @param integer $index 
	 */
	function getCategory($index = null)
	{
		if ($index !== null) {
			return $this->Category[$index];
		} else {
			return $this->Category;
		}
	}
	/**
	 * @return void
	 * @param CategoryType $value 
	 * @param  $index 
	 */
	function setCategory($value, $index = null)
	{
		if ($index !== null) {
			$this->Category[$index] = $value;
		} else {
			$this->Category = $value;
		}
	}
	/**
	 * @return void
	 * @param CategoryType $value 
	 */
	function addCategory($value)
	{
		$this->Category[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Category' =>
					array(
						'required' => false,
						'type' => 'CategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
