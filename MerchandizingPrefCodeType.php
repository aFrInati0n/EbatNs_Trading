<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * MerchandizingPrefCodeType - Type declaration to be used by otherschema. 
 * Indicates whether the seller has opted to participate initem cross-promotion 
 * through the Merchandising Manager feature. Thisoption is set on the user's My 
 * eBay page and determines whether theseller's other items are cross-promoted with 
 * items from the sellerthat are listed or sold. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MerchandizingPrefCodeType.html
 *
 * @property string OptIn
 * @property string OptOut
 * @property string CustomCode
 */
class MerchandizingPrefCodeType extends EbatNs_FacetType
{
	const CodeType_OptIn = 'OptIn';
	const CodeType_OptOut = 'OptOut';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MerchandizingPrefCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MerchandizingPrefCodeType = new MerchandizingPrefCodeType();

?>
