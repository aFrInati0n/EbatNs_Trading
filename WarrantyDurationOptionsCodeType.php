<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the various warranty durations being offered. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WarrantyDurationOptionsCodeType.html
 *
 * @property string Months_1
 * @property string Months_3
 * @property string Months_6
 * @property string Years_1
 * @property string Years_2
 * @property string Years_3
 * @property string Years_MoreThan3
 * @property string CustomCode
 */
class WarrantyDurationOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Months_1 = 'Months_1';
	const CodeType_Months_3 = 'Months_3';
	const CodeType_Months_6 = 'Months_6';
	const CodeType_Years_1 = 'Years_1';
	const CodeType_Years_2 = 'Years_2';
	const CodeType_Years_3 = 'Years_3';
	const CodeType_Years_MoreThan3 = 'Years_MoreThan3';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WarrantyDurationOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_WarrantyDurationOptionsCodeType = new WarrantyDurationOptionsCodeType();

?>
