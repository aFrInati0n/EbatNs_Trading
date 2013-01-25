<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the Item Specifics SYI XSL stylesheet. Apply the stylesheet to theXML 
 * returned from a call to GetAttributesCS or GetProductSellingPages torender a 
 * form like the Item Specifics portion of eBay's Title and Description page.See 
 * the eBay Web Services Guide for an overview of Item Specifics and informationon 
 * working with the XSL. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAttributesXSLRequestType.html
 *
 */
class GetAttributesXSLRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $FileName;
	/**
	 * @var string
	 */
	protected $FileVersion;

	/**
	 * @return string
	 */
	function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileName($value)
	{
		$this->FileName = $value;
	}
	/**
	 * @return string
	 */
	function getFileVersion()
	{
		return $this->FileVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileVersion($value)
	{
		$this->FileVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAttributesXSLRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FileName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FileVersion' =>
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
