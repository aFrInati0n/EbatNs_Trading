<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * <table><tr><td class="notebox"><b>Note:</b> This call will soon be deprecated. 
 * Use accordingly.</td></tr></table><br> Requests a list of Picture Manager 
 * options and allowed values,such as subscription type and picture display. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPictureManagerOptionsRequestType.html
 *
 */
class GetPictureManagerOptionsRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPictureManagerOptionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
