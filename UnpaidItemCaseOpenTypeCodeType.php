<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates the current status for an unpiad item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemCaseOpenTypeCodeType.html
 *
 * @property string Auto
 * @property string Manual
 * @property string CustomCode
 */
class UnpaidItemCaseOpenTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Auto = 'Auto';
	const CodeType_Manual = 'Manual';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemCaseOpenTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UnpaidItemCaseOpenTypeCodeType = new UnpaidItemCaseOpenTypeCodeType();

?>
