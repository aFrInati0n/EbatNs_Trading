<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * USPS Rate Options 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/USPSRateOptionCodeType.html
 *
 * @property string USPSDiscounted
 * @property string USPSRetail
 * @property string CustomCode
 */
class USPSRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_USPSDiscounted = 'USPSDiscounted';
	const CodeType_USPSRetail = 'USPSRetail';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('USPSRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_USPSRateOptionCodeType = new USPSRateOptionCodeType();

?>
