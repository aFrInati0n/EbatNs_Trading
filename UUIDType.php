<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
require_once 'EbatNs_SimpleType.php';

/**
 * Specifies a universally unique identifier. The identifier can only contain 
 * digitsfrom 0-9 and letters from A-F. The identifier must be 32 characters long. 
 * Forexample, 9CEBD9A6825644EC8D06C436D6CF494B. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UUIDType.html
 *
 */
class UUIDType extends EbatNs_SimpleType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UUIDType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UUIDType = new UUIDType();

?>
