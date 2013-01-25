<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The status of a particular entry. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EnableCodeType.html
 *
 * @property string Enable
 * @property string Disable
 * @property string CustomCode
 */
class EnableCodeType extends EbatNs_FacetType
{
	const CodeType_Enable = 'Enable';
	const CodeType_Disable = 'Disable';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EnableCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_EnableCodeType = new EnableCodeType();

?>
