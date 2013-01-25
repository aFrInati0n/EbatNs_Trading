<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies an action to be performed on a folder or setting in the user's 
 * PictureManager account. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerActionCodeType.html
 *
 * @property string Add
 * @property string Delete
 * @property string Rename
 * @property string Move
 * @property string Change
 * @property string CustomCode
 */
class PictureManagerActionCodeType extends EbatNs_FacetType
{
	const CodeType_Add = 'Add';
	const CodeType_Delete = 'Delete';
	const CodeType_Rename = 'Rename';
	const CodeType_Move = 'Move';
	const CodeType_Change = 'Change';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerActionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PictureManagerActionCodeType = new PictureManagerActionCodeType();

?>
