<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * No longer recommended. This is an older format for describing item specifics 
 * using an ID-based model. Most eBay categories no longer support ID-based 
 * attributes.The remaining categories (e.g., US eBay Motors) will drop support for 
 * ID-based attributes by May 2012. New applications should not use ID-based 
 * attributes. Existing applications should be updated to remove all dependencieson 
 * ID-based attributes now. Instead, use GetCategorySpecifics for the newer Custom 
 * Item Specifics model.<br><br>Retrieves an XML string that describes how to 
 * present ItemSpecifics to a seller who is creating a new listing.Use this 
 * information to present users withthe equivalent of the Item Specifics portion of 
 * the eBay Titleand Description pages and to validate selected eBay attributes 
 * onthe client before including them in an AddItem call or relatedcalls. The XML 
 * string contains a list of all the attributes thatare applicable for one or more 
 * requested categories, along withrelated meta-data. The meta-data specifies all 
 * the possiblevalues of each attribute, the logic for presenting the attributesto 
 * a user, and rules for validating the user's selections. <br><br>See the eBay Web 
 * Services Guide for an overview of Item Specifics anddetails about the eBay 
 * attribute model. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAttributesCSRequestType.html
 *
 */
class GetAttributesCSRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;
	/**
	 * @var int
	 */
	protected $AttributeSetID;
	/**
	 * @var boolean
	 */
	protected $IncludeCategoryMappingDetails;

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
	 * @return int
	 * @param integer $index 
	 */
	function getAttributeSetID($index = null)
	{
		if ($index !== null) {
			return $this->AttributeSetID[$index];
		} else {
			return $this->AttributeSetID;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setAttributeSetID($value, $index = null)
	{
		if ($index !== null) {
			$this->AttributeSetID[$index] = $value;
		} else {
			$this->AttributeSetID = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addAttributeSetID($value)
	{
		$this->AttributeSetID[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeCategoryMappingDetails()
	{
		return $this->IncludeCategoryMappingDetails;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeCategoryMappingDetails($value)
	{
		$this->IncludeCategoryMappingDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAttributesCSRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AttributeSystemVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSetID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'IncludeCategoryMappingDetails' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
