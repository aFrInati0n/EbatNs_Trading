<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Used to indicate whether the parts compatibility feature is enabled for a 
 * category. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemCompatibilityEnabledCodeType.html
 *
 * @property string Disabled
 * @property string ByApplication
 * @property string BySpecification
 * @property string CustomCode
 */
class ItemCompatibilityEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_ByApplication = 'ByApplication';
	const CodeType_BySpecification = 'BySpecification';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemCompatibilityEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ItemCompatibilityEnabledCodeType = new ItemCompatibilityEnabledCodeType();

?>
