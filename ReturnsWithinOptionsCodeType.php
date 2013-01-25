<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The number of days within which the item can be returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReturnsWithinOptionsCodeType.html
 *
 * @property string Days_3
 * @property string Days_7
 * @property string Days_10
 * @property string Days_14
 * @property string Days_30
 * @property string Days_60
 * @property string CustomCode
 */
class ReturnsWithinOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_Days_10 = 'Days_10';
	const CodeType_Days_14 = 'Days_14';
	const CodeType_Days_30 = 'Days_30';
	const CodeType_Days_60 = 'Days_60';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReturnsWithinOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ReturnsWithinOptionsCodeType = new ReturnsWithinOptionsCodeType();

?>
