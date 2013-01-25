<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Values indicate the status of a sale. Used for the Promotional Price 
 * Displayfeature, which enables sellers to apply discounts across many listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionalSaleStatusCodeType.html
 *
 * @property string Active
 * @property string Scheduled
 * @property string Processing
 * @property string Inactive
 * @property string Deleted
 * @property string CustomCode
 */
class PromotionalSaleStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Scheduled = 'Scheduled';
	const CodeType_Processing = 'Processing';
	const CodeType_Inactive = 'Inactive';
	const CodeType_Deleted = 'Deleted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionalSaleStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionalSaleStatusCodeType = new PromotionalSaleStatusCodeType();

?>
