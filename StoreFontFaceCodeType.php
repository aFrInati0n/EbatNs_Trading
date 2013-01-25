<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Font selection for Store configuration. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreFontFaceCodeType.html
 *
 * @property string Arial
 * @property string Courier
 * @property string Times
 * @property string Verdana
 * @property string CustomCode
 */
class StoreFontFaceCodeType extends EbatNs_FacetType
{
	const CodeType_Arial = 'Arial';
	const CodeType_Courier = 'Courier';
	const CodeType_Times = 'Times';
	const CodeType_Verdana = 'Verdana';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreFontFaceCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreFontFaceCodeType = new StoreFontFaceCodeType();

?>
