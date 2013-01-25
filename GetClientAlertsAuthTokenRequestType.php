<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a token required for the GetUserAlerts call in the Client Alerts API. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetClientAlertsAuthTokenRequestType.html
 *
 */
class GetClientAlertsAuthTokenRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetClientAlertsAuthTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
