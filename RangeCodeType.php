<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Type declaration to be used by other schema. Indicates that the datarepresents 
 * the high or low end in a range, such as a date range,price range, or width 
 * range. (For example, when callingGetProductSearchResults, you use range codes to 
 * indicate the role ofan attribute in a range.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RangeCodeType.html
 *
 * @property string High
 * @property string Low
 * @property string CustomCode
 */
class RangeCodeType extends EbatNs_FacetType
{
	const CodeType_High = 'High';
	const CodeType_Low = 'Low';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RangeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_RangeCodeType = new RangeCodeType();

?>
