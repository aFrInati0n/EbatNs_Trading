<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Information about a parent name-value pair. Currently used to 
 * indicaterelationships betweenItem Specifics. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NameValueRelationshipType.html
 *
 */
class NameValueRelationshipType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ParentName;
	/**
	 * @var string
	 */
	protected $ParentValue;

	/**
	 * @return string
	 */
	function getParentName()
	{
		return $this->ParentName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setParentName($value)
	{
		$this->ParentName = $value;
	}
	/**
	 * @return string
	 */
	function getParentValue()
	{
		return $this->ParentValue;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setParentValue($value)
	{
		$this->ParentValue = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NameValueRelationshipType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ParentName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ParentValue' =>
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
