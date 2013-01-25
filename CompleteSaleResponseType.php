<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Indicates the success or failure of the attempt to leave feedback for the 
 * buyer,change the paid status in My eBay, and/or change the shipped status in My 
 * eBay.<br><br>Applies to half.com.<br><br><br><br>When CompleteSale is applied to 
 * a specified order (by specifying OrderID), italso applies to the child 
 * transactions associated with the order. An OrderIDcannot be used with half.com 
 * items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CompleteSaleResponseType.html
 *
 */
class CompleteSaleResponseType extends AbstractResponseType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CompleteSaleResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
