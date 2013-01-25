<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * If a seller offers an item for less than the Minimum Advertised Price (MAP) of 
 * that item,the seller cannot show the actual discounted price on the view item 
 * page. The buyermust open a pop-up on view item page or the discount price will 
 * be shown during checkout.MinimumAdvertisedPriceExposure provides enums for 
 * specifying how the buyer is to viewthe discounted price, either PreCheckout or 
 * DuringCheckout. This is applicable for MAP items only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MinimumAdvertisedPriceExposureCodeType.html
 *
 * @property string PreCheckout
 * @property string DuringCheckout
 * @property string None
 * @property string CustomCode
 */
class MinimumAdvertisedPriceExposureCodeType extends EbatNs_FacetType
{
	const CodeType_PreCheckout = 'PreCheckout';
	const CodeType_DuringCheckout = 'DuringCheckout';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MinimumAdvertisedPriceExposureCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MinimumAdvertisedPriceExposureCodeType = new MinimumAdvertisedPriceExposureCodeType();

?>
