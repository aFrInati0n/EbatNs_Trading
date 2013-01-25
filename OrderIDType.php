<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_SimpleType.php';

/**
 * A unique identifier for an order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderIDType.html
 *
 */
class OrderIDType extends EbatNs_SimpleType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderIDType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_OrderIDType = new OrderIDType();

?>
