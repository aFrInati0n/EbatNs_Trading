<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DescriptionTemplateCodeType.php';

/**
 * The information for one Theme or one Layout. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DescriptionTemplateType.html
 *
 */
class DescriptionTemplateType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $GroupID;
	/**
	 * @var int
	 */
	protected $ID;
	/**
	 * @var anyURI
	 */
	protected $ImageURL;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $TemplateXML;
	/**
	 * @var DescriptionTemplateCodeType
	 */
	protected $Type;

	/**
	 * @return int
	 */
	function getGroupID()
	{
		return $this->GroupID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setGroupID($value)
	{
		$this->GroupID = $value;
	}
	/**
	 * @return int
	 */
	function getID()
	{
		return $this->ID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setID($value)
	{
		$this->ID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getImageURL()
	{
		return $this->ImageURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setImageURL($value)
	{
		$this->ImageURL = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 */
	function getTemplateXML()
	{
		return $this->TemplateXML;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTemplateXML($value)
	{
		$this->TemplateXML = $value;
	}
	/**
	 * @return DescriptionTemplateCodeType
	 */
	function getType()
	{
		return $this->Type;
	}
	/**
	 * @return void
	 * @param DescriptionTemplateCodeType $value 
	 */
	function setType($value)
	{
		$this->Type = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DescriptionTemplateType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'GroupID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ImageURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TemplateXML' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Type' =>
					array(
						'required' => false,
						'type' => 'DescriptionTemplateCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
