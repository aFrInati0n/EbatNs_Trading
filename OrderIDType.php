<?php
// autogenerated file 15.11.2010 08:29
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
