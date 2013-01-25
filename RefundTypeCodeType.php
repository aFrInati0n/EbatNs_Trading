<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Explanation of the reason that the refund is being issued. Applicable to 
 * Half.comrefunds only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundTypeCodeType.html
 *
 * @property string Full
 * @property string FullPlusShipping
 * @property string CustomOrPartial
 * @property string CustomCode
 */
class RefundTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Full = 'Full';
	const CodeType_FullPlusShipping = 'FullPlusShipping';
	const CodeType_CustomOrPartial = 'CustomOrPartial';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RefundTypeCodeType = new RefundTypeCodeType();

?>
