<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemCompatibilityType.php';

/**
 * A list of compatible applications specified as name and value pairs. Describes 
 * anassembly with which a part is compatible (i.e., compatibility by application). 
 * Forexample, to specify a part's compatibility with a vehicle, the name would map 
 * tostandard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). 
 * Thevalues would desribe the specific vehicle, such as a 2006 Honda 
 * Accord.<br><br> Parts Compatibility is supported in limited Parts & 
 * Accessoriescategories for the eBay Motors (US) site (site ID 100) only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemCompatibilityListType.html
 *
 */
class ItemCompatibilityListType extends EbatNs_ComplexType
{
	/**
	 * @var ItemCompatibilityType
	 */
	protected $Compatibility;

	/**
	 * @return ItemCompatibilityType
	 * @param integer $index 
	 */
	function getCompatibility($index = null)
	{
		if ($index !== null) {
			return $this->Compatibility[$index];
		} else {
			return $this->Compatibility;
		}
	}
	/**
	 * @return void
	 * @param ItemCompatibilityType $value 
	 * @param  $index 
	 */
	function setCompatibility($value, $index = null)
	{
		if ($index !== null) {
			$this->Compatibility[$index] = $value;
		} else {
			$this->Compatibility = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemCompatibilityType $value 
	 */
	function addCompatibility($value)
	{
		$this->Compatibility[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemCompatibilityListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Compatibility' =>
					array(
						'required' => false,
						'type' => 'ItemCompatibilityType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
