<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies the type of action to carry out with SetStoreCategories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCategoryUpdateActionCodeType.html
 *
 * @property string Add
 * @property string Delete
 * @property string Move
 * @property string Rename
 * @property string CustomCode
 */
class StoreCategoryUpdateActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Move = 'Move';
	const CodeType_Rename = 'Rename';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCategoryUpdateActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_StoreCategoryUpdateActionCodeType = new StoreCategoryUpdateActionCodeType();

?>
