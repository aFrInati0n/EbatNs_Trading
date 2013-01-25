<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'StoreVacationPreferencesType.php';

/**
 * Store Preferences type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StorePreferencesType.html
 *
 */
class StorePreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var StoreVacationPreferencesType
	 */
	protected $VacationPreferences;

	/**
	 * @return StoreVacationPreferencesType
	 */
	function getVacationPreferences()
	{
		return $this->VacationPreferences;
	}
	/**
	 * @return void
	 * @param StoreVacationPreferencesType $value 
	 */
	function setVacationPreferences($value)
	{
		$this->VacationPreferences = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StorePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VacationPreferences' =>
					array(
						'required' => false,
						'type' => 'StoreVacationPreferencesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
