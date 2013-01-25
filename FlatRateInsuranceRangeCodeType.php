<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Ranges for use when offering insurance in combined payment orders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FlatRateInsuranceRangeCodeType.html
 *
 * @property string FlatRateInsuranceRange1
 * @property string FlatRateInsuranceRange2
 * @property string FlatRateInsuranceRange3
 * @property string FlatRateInsuranceRange4
 * @property string FlatRateInsuranceRange5
 * @property string FlatRateInsuranceRange6
 * @property string CustomCode
 */
class FlatRateInsuranceRangeCodeType extends EbatNs_FacetType
{
	const CodeType_FlatRateInsuranceRange1 = 'FlatRateInsuranceRange1';
	const CodeType_FlatRateInsuranceRange2 = 'FlatRateInsuranceRange2';
	const CodeType_FlatRateInsuranceRange3 = 'FlatRateInsuranceRange3';
	const CodeType_FlatRateInsuranceRange4 = 'FlatRateInsuranceRange4';
	const CodeType_FlatRateInsuranceRange5 = 'FlatRateInsuranceRange5';
	const CodeType_FlatRateInsuranceRange6 = 'FlatRateInsuranceRange6';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FlatRateInsuranceRangeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_FlatRateInsuranceRangeCodeType = new FlatRateInsuranceRangeCodeType();

?>
