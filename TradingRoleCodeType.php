<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * A means for identifying a person's role in doing business on eBay. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TradingRoleCodeType.html
 *
 * @property string Buyer
 * @property string Seller
 * @property string CustomCode
 */
class TradingRoleCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TradingRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TradingRoleCodeType = new TradingRoleCodeType();

?>
