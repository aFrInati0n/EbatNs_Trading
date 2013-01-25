<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Indicates Skype contact options. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SkypeContactOptionCodeType.html
 *
 * @property string Chat
 * @property string Voice
 * @property string CustomCode
 */
class SkypeContactOptionCodeType extends EbatNs_FacetType
{
	const CodeType_Chat = 'Chat';
	const CodeType_Voice = 'Voice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SkypeContactOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_SkypeContactOptionCodeType = new SkypeContactOptionCodeType();

?>
