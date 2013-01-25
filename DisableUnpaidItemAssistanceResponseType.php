<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Response to DisableUnpaidItemAssistance request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisableUnpaidItemAssistanceResponseType.html
 *
 */
class DisableUnpaidItemAssistanceResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisableUnpaidItemAssistanceResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
