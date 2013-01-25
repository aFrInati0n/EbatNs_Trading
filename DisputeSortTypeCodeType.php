<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies how a list of returned disputes should be sorted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeSortTypeCodeType.html
 *
 * @property string None
 * @property string DisputeCreatedTimeAscending
 * @property string DisputeCreatedTimeDescending
 * @property string DisputeStatusAscending
 * @property string DisputeStatusDescending
 * @property string DisputeCreditEligibilityAscending
 * @property string DisputeCreditEligibilityDescending
 * @property string CustomCode
 */
class DisputeSortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_DisputeCreatedTimeAscending = 'DisputeCreatedTimeAscending';
	const CodeType_DisputeCreatedTimeDescending = 'DisputeCreatedTimeDescending';
	const CodeType_DisputeStatusAscending = 'DisputeStatusAscending';
	const CodeType_DisputeStatusDescending = 'DisputeStatusDescending';
	const CodeType_DisputeCreditEligibilityAscending = 'DisputeCreditEligibilityAscending';
	const CodeType_DisputeCreditEligibilityDescending = 'DisputeCreditEligibilityDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeSortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeSortTypeCodeType = new DisputeSortTypeCodeType();

?>
