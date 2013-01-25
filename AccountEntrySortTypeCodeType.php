<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies how account entries should be sorted in a response from eBay. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccountEntrySortTypeCodeType.html
 *
 * @property string None
 * @property string AccountEntryCreatedTimeAscending
 * @property string AccountEntryCreatedTimeDescending
 * @property string AccountEntryItemNumberAscending
 * @property string AccountEntryItemNumberDescending
 * @property string AccountEntryFeeTypeAscending
 * @property string AccountEntryFeeTypeDescending
 * @property string CustomCode
 */
class AccountEntrySortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_AccountEntryCreatedTimeAscending = 'AccountEntryCreatedTimeAscending';
	const CodeType_AccountEntryCreatedTimeDescending = 'AccountEntryCreatedTimeDescending';
	const CodeType_AccountEntryItemNumberAscending = 'AccountEntryItemNumberAscending';
	const CodeType_AccountEntryItemNumberDescending = 'AccountEntryItemNumberDescending';
	const CodeType_AccountEntryFeeTypeAscending = 'AccountEntryFeeTypeAscending';
	const CodeType_AccountEntryFeeTypeDescending = 'AccountEntryFeeTypeDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccountEntrySortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountEntrySortTypeCodeType = new AccountEntrySortTypeCodeType();

?>
