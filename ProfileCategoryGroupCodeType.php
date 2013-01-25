<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Enumerated type that defines the category group values. Business Policies 
 * profiles (Payment,Shipping, and Return Policy) are linked to category 
 * groups.<br><br><span class="tablenote"><strong>Note:</strong>Business Policies 
 * are not yet available for use on the eBay platform.</span> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProfileCategoryGroupCodeType.html
 *
 * @property string Inherit
 * @property string None
 * @property string ALL
 * @property string MOTORS_VEHICLE
 */
class ProfileCategoryGroupCodeType extends EbatNs_FacetType
{
	const CodeType_Inherit = 'Inherit';
	const CodeType_None = 'None';
	const CodeType_ALL = 'ALL';
	const CodeType_MOTORS_VEHICLE = 'MOTORS_VEHICLE';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProfileCategoryGroupCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ProfileCategoryGroupCodeType = new ProfileCategoryGroupCodeType();

?>
