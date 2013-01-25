<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The type of action to take. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ModifyActionCodeType.html
 *
 * @property string Add
 * @property string Delete
 * @property string Update
 * @property string CustomCode
 */
class ModifyActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Update = 'Update';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ModifyActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ModifyActionCodeType = new ModifyActionCodeType();

?>
