<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * This type contains string values that can be returned 
 * inAllCategoriesExpansionArray.ExpansionItem.SearchResultValues. These values 
 * areanalogous to the icons that appear adjacent to a listing's title in a 
 * Searchpage. All applicable values are returned for each listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchResultValuesCodeType.html
 *
 * @property string Escrow
 * @property string New
 * @property string CharityListing
 * @property string Picture
 * @property string Gift
 * @property string CustomCode
 */
class SearchResultValuesCodeType extends EbatNs_FacetType
{
	const CodeType_Escrow = 'Escrow';
	const CodeType_New = 'New';
	const CodeType_CharityListing = 'CharityListing';
	const CodeType_Picture = 'Picture';
	const CodeType_Gift = 'Gift';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchResultValuesCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SearchResultValuesCodeType = new SearchResultValuesCodeType();

?>
