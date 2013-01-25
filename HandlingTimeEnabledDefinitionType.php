<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Defines the feature that specifies whether a handling time (dispatch time)could 
 * be enabled on the site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HandlingTimeEnabledDefinitionType.html
 *
 */
class HandlingTimeEnabledDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HandlingTimeEnabledDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
