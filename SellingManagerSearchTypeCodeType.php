<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies search term types for Selling Manager listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerSearchTypeCodeType.html
 *
 * @property string BuyerUserID
 * @property string BuyerEmail
 * @property string BuyerFullName
 * @property string ItemID
 * @property string Title
 * @property string ProductID
 * @property string ProductName
 * @property string CustomLabel
 * @property string SaleRecordID
 * @property string CustomCode
 */
class SellingManagerSearchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerUserID = 'BuyerUserID';
	const CodeType_BuyerEmail = 'BuyerEmail';
	const CodeType_BuyerFullName = 'BuyerFullName';
	const CodeType_ItemID = 'ItemID';
	const CodeType_Title = 'Title';
	const CodeType_ProductID = 'ProductID';
	const CodeType_ProductName = 'ProductName';
	const CodeType_CustomLabel = 'CustomLabel';
	const CodeType_SaleRecordID = 'SaleRecordID';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerSearchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SellingManagerSearchTypeCodeType = new SellingManagerSearchTypeCodeType();

?>
