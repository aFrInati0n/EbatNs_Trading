<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The type of promotion. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PromotionMethodCodeType.html
 *
 * @property string CrossSell
 * @property string UpSell
 * @property string CustomCode
 */
class PromotionMethodCodeType extends EbatNs_FacetType
{
	const CodeType_CrossSell = 'CrossSell';
	const CodeType_UpSell = 'UpSell';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PromotionMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionMethodCodeType = new PromotionMethodCodeType();

?>
