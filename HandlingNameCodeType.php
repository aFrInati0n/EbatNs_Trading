<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * How packaging/handling cost is to be determined for combined payment. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/HandlingNameCodeType.html
 *
 * @property string EachAdditionalAmount
 * @property string EachAdditionalAmountOff
 * @property string EachAdditionalPercentOff
 * @property string IndividualHandlingFee
 * @property string CombinedHandlingFee
 * @property string CustomCode
 */
class HandlingNameCodeType extends EbatNs_FacetType
{
	const CodeType_EachAdditionalAmount = 'EachAdditionalAmount';
	const CodeType_EachAdditionalAmountOff = 'EachAdditionalAmountOff';
	const CodeType_EachAdditionalPercentOff = 'EachAdditionalPercentOff';
	const CodeType_IndividualHandlingFee = 'IndividualHandlingFee';
	const CodeType_CombinedHandlingFee = 'CombinedHandlingFee';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('HandlingNameCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_HandlingNameCodeType = new HandlingNameCodeType();

?>
