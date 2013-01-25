<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * No longer recommended. This supports an older ID-based format fordescribing item 
 * specifics and product details.Most eBay categories no longer support ID-based 
 * attributes.The remaining categories (e.g., US eBay Motors) will drop supportfor 
 * ID-based attributes by May 2012.New applications should not use ID-based 
 * attributes.Existing applications should be updated to remove all dependencieson 
 * ID-based attributes now. Instead, use GetCategoryFeatures for thenewer Custom 
 * Item Specifics model, and use FindProducts ineBay's Shopping API to search for 
 * product details.<br><br>Retrieves mappings between categories and characteristic 
 * setsthat are available for an eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategory2CSRequestType.html
 *
 */
class GetCategory2CSRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return string
	 */
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategory2CSRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSystemVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
