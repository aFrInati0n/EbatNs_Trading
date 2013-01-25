<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns XML that describes how to present Item Specifics to a sellerand how to 
 * validate selected eBay attributes on the client before includingthem in an 
 * AddItem call or related calls.See the Developer's Guide for an overview of Item 
 * Specifics and details aboutthe eBay attribute model. Also returns the current 
 * version of the meta-data system. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAttributesCSResponseType.html
 *
 */
class GetAttributesCSResponseType extends AbstractResponseType
{
	/**
	 * @var string
	 */
	protected $AttributeSystemVersion;
	/**
	 * @var string
	 */
	protected $AttributeData;

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
	 * @return string
	 */
	function getAttributeData()
	{
		return $this->AttributeData;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAttributeData($value)
	{
		$this->AttributeData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAttributesCSResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
					'AttributeData' =>
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
