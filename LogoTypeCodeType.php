<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The type of logo. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LogoTypeCodeType.html
 *
 * @property string WinningBidderNotice
 * @property string Store
 * @property string Custom
 * @property string CustomCode
 */
class LogoTypeCodeType extends EbatNs_FacetType
{
	const CodeType_WinningBidderNotice = 'WinningBidderNotice';
	const CodeType_Store = 'Store';
	const CodeType_Custom = 'Custom';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LogoTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_LogoTypeCodeType = new LogoTypeCodeType();

?>
