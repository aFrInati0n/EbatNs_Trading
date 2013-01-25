<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Type of seller account. This value is returned if the user is a business seller 
 * with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 100 (Motors). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerBusinessCodeType.html
 *
 * @property string Undefined
 * @property string Private
 * @property string Commercial
 * @property string CustomCode
 */
class SellerBusinessCodeType extends EbatNs_FacetType
{
	const CodeType_Undefined = 'Undefined';
	const CodeType_Private = 'Private';
	const CodeType_Commercial = 'Commercial';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerBusinessCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellerBusinessCodeType = new SellerBusinessCodeType();

?>
