<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the level of the authenticated user's Picture Managersubscription. 
 * Each level has a monthly fee (except "Free") andprovides a certain amount of 
 * storage space. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerSubscriptionLevelCodeType.html
 *
 * @property string Free
 * @property string Level1
 * @property string Level2
 * @property string Level3
 * @property string Level4
 * @property string CustomCode
 */
class PictureManagerSubscriptionLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Free = 'Free';
	const CodeType_Level1 = 'Level1';
	const CodeType_Level2 = 'Level2';
	const CodeType_Level3 = 'Level3';
	const CodeType_Level4 = 'Level4';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerSubscriptionLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureManagerSubscriptionLevelCodeType = new PictureManagerSubscriptionLevelCodeType();

?>
