<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns the status of an action on a setting, folder, or picture in a Picture 
 * Manager account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetPictureManagerDetailsResponseType.html
 *
 */
class SetPictureManagerDetailsResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetPictureManagerDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
