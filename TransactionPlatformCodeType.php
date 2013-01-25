<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the site on which the purchase was made. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TransactionPlatformCodeType.html
 *
 * @property string eBay
 * @property string Express
 * @property string Half
 * @property string Shopping
 * @property string WorldOfGood
 * @property string CustomCode
 */
class TransactionPlatformCodeType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_Express = 'Express';
	const CodeType_Half = 'Half';
	const CodeType_Shopping = 'Shopping';
	const CodeType_WorldOfGood = 'WorldOfGood';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TransactionPlatformCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_TransactionPlatformCodeType = new TransactionPlatformCodeType();

?>
