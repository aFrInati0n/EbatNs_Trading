<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Response when an application has voluntarily revoked a user token. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RevokeTokenResponseType.html
 *
 */
class RevokeTokenResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RevokeTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
