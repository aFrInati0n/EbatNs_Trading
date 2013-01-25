<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the tax table for a user on a given site or retrieves the 
 * validjurisdictions (if any) for a given site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetTaxTableRequestType.html
 *
 */
class GetTaxTableRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
