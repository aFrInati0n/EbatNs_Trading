<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValueTypeCodeType.html
 *
 * @property string Decimal
 * @property string Text
 * @property string ISBN
 * @property string UPC
 * @property string EAN
 * @property string Date
 * @property string CustomCode
 */
class ValueTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Decimal = 'Decimal';
	const CodeType_Text = 'Text';
	const CodeType_ISBN = 'ISBN';
	const CodeType_UPC = 'UPC';
	const CodeType_EAN = 'EAN';
	const CodeType_Date = 'Date';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValueTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ValueTypeCodeType = new ValueTypeCodeType();

?>
