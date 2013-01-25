<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Units of measure that you can use to specify properties such as weight and 
 * sizedimensions. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnitCodeType.html
 *
 * @property string kg
 * @property string gm
 * @property string lbs
 * @property string oz
 * @property string cm
 * @property string mm
 * @property string inches
 * @property string ft
 * @property string CustomCode
 */
class UnitCodeType extends EbatNs_FacetType
{
	const CodeType_kg = 'kg';
	const CodeType_gm = 'gm';
	const CodeType_lbs = 'lbs';
	const CodeType_oz = 'oz';
	const CodeType_cm = 'cm';
	const CodeType_mm = 'mm';
	const CodeType_inches = 'inches';
	const CodeType_ft = 'ft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnitCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_UnitCodeType = new UnitCodeType();

?>
