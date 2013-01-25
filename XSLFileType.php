<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Describes an XSL file that would be returned from an Item Specifics or 
 * Pre-filledItem Information meta-data call (such as GetAttributesXSL or 
 * GetProductFinderXSL). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/XSLFileType.html
 *
 */
class XSLFileType extends EbatNs_ComplexType
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
	 * @var string
	 */
	protected $FileContent;

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
	 * @return string
	 */
	function getFileContent()
	{
		return $this->FileContent;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileContent($value)
	{
		$this->FileContent = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('XSLFileType', 'urn:ebay:apis:eBLBaseComponents');
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
					),
					'FileContent' =>
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
