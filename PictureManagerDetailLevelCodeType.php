<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies a detail level for a response to a Picture Manager call.Use a value 
 * for this element, rather than a value for DetailLevel. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerDetailLevelCodeType.html
 *
 * @property string ReturnAll
 * @property string ReturnSubscription
 * @property string ReturnPicture
 * @property string CustomCode
 */
class PictureManagerDetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ReturnSubscription = 'ReturnSubscription';
	const CodeType_ReturnPicture = 'ReturnPicture';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureManagerDetailLevelCodeType = new PictureManagerDetailLevelCodeType();

?>
