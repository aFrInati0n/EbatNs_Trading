<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SortOrderCodeType.php';

/**
 * Specifies how to return the result list for My eBay features such as 
 * savedsearches, favorite sellers, and second chance offers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyeBaySelectionType.html
 *
 */
class MyeBaySelectionType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $Include;
	/**
	 * @var SortOrderCodeType
	 */
	protected $Sort;
	/**
	 * @var int
	 */
	protected $MaxResults;
	/**
	 * @var string
	 */
	protected $UserDefinedListName;
	/**
	 * @var boolean
	 */
	protected $IncludeListContents;

	/**
	 * @return boolean
	 */
	function getInclude()
	{
		return $this->Include;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setInclude($value)
	{
		$this->Include = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
	/**
	 * @return int
	 */
	function getMaxResults()
	{
		return $this->MaxResults;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxResults($value)
	{
		$this->MaxResults = $value;
	}
	/**
	 * @return string
	 */
	function getUserDefinedListName()
	{
		return $this->UserDefinedListName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserDefinedListName($value)
	{
		$this->UserDefinedListName = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeListContents()
	{
		return $this->IncludeListContents;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeListContents($value)
	{
		$this->IncludeListContents = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyeBaySelectionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Include' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Sort' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxResults' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserDefinedListName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeListContents' =>
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
