<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreColorSchemeType.php';

/**
 * Set of eBay Store color schemes. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreColorSchemeArrayType.html
 *
 */
class StoreColorSchemeArrayType extends EbatNs_ComplexType
{
	/**
	 * @var StoreColorSchemeType
	 */
	protected $ColorScheme;

	/**
	 * @return StoreColorSchemeType
	 * @param integer $index 
	 */
	function getColorScheme($index = null)
	{
		if ($index !== null) {
			return $this->ColorScheme[$index];
		} else {
			return $this->ColorScheme;
		}
	}
	/**
	 * @return void
	 * @param StoreColorSchemeType $value 
	 * @param  $index 
	 */
	function setColorScheme($value, $index = null)
	{
		if ($index !== null) {
			$this->ColorScheme[$index] = $value;
		} else {
			$this->ColorScheme = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreColorSchemeType $value 
	 */
	function addColorScheme($value)
	{
		$this->ColorScheme[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreColorSchemeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ColorScheme' =>
					array(
						'required' => false,
						'type' => 'StoreColorSchemeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
