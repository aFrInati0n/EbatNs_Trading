<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_SimpleType.php';

/**
 * Primitive type that represents a stock-keeping unit (SKU). The usage of this 
 * string may vary in different contexts. For usage information and rules, see the 
 * fields that reference this type. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SKUType.html
 *
 */
class SKUType extends EbatNs_SimpleType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SKUType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SKUType = new SKUType();

?>
