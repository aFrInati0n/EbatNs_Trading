<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * For the US and Germany sites, an eBay item must meet a number of eligibility 
 * requirements in order to also be included on eBay Express. One requirement is 
 * that the item must include a picture (or gallery image).Currently, this type 
 * defines no special meta-data. (An empty element is returned.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressPicturesRequiredDefinitionType.html
 *
 */
class ExpressPicturesRequiredDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressPicturesRequiredDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
