<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the LocalListingDistancesSpecialty feature. This feature displays the 
 * supported local listingdistances for items listed by sellers subscribed to Local 
 * Market for Specialty Vehicles. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LocalListingDistancesSpecialtyDefinitionType.html
 *
 */
class LocalListingDistancesSpecialtyDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LocalListingDistancesSpecialtyDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
