<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the range of days the seller can be contacted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DaysCodeType.html
 *
 * @property string None
 * @property string EveryDay
 * @property string Weekdays
 * @property string Weekends
 * @property string CustomCode
 */
class DaysCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_EveryDay = 'EveryDay';
	const CodeType_Weekdays = 'Weekdays';
	const CodeType_Weekends = 'Weekends';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DaysCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DaysCodeType = new DaysCodeType();

?>
