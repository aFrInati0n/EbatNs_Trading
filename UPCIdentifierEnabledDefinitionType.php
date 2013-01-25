<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This type defines the Universal Product Code (UPC) feature, and whether this 
 * featureis enabled at the site level. An empty UPCIdentifierEnabled field is 
 * returned underthe FeatureDefinitions container in GetCategoryFeatures if the 
 * feature is applicableto the site and if UPCIdentifierEnabled is passed in as a 
 * FeatureID (or if noFeatureID is passed in, hence all features are returned). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UPCIdentifierEnabledDefinitionType.html
 *
 */
class UPCIdentifierEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UPCIdentifierEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
