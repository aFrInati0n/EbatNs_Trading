<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * This is for FSBO.Each of the subscriptions will have following options, which 
 * will define"National" vs "Local" ad format listing."LocalOptional" : This will 
 * allow national and local listing."LocalOnly" : Seller can have Local listings 
 * only."NationalOnly" : Seller can not opt into local only exposure. It has to be 
 * national listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NonSubscriptionDefinitionType.html
 *
 */
class NonSubscriptionDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NonSubscriptionDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
