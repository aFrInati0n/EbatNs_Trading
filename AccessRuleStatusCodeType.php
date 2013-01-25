<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines values that describe an application's current statuswith respect to an 
 * API access rule. The rules specify daily,hourly, and periodic usage limits for 
 * various eBay Web Services calls. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AccessRuleStatusCodeType.html
 *
 * @property string RuleOff
 * @property string RuleOn
 * @property string ApplicationBlocked
 * @property string CustomCode
 */
class AccessRuleStatusCodeType extends EbatNs_FacetType
{
	const CodeType_RuleOff = 'RuleOff';
	const CodeType_RuleOn = 'RuleOn';
	const CodeType_ApplicationBlocked = 'ApplicationBlocked';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AccessRuleStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccessRuleStatusCodeType = new AccessRuleStatusCodeType();

?>
