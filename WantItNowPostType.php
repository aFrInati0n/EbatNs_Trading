<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';
require_once 'ItemIDType.php';

/**
 * Contains the data describing a single Want It Now post. Buyers create Want It 
 * Nowposts to communicate to sellers specific requirements for items they would 
 * like tobuy. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/WantItNowPostType.html
 *
 */
class WantItNowPostType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var ItemIDType
	 */
	protected $PostID;
	/**
	 * @var SiteCodeType
	 */
	protected $Site;
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var int
	 */
	protected $ResponseCount;
	/**
	 * @var string
	 */
	protected $Title;

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
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getPostID()
	{
		return $this->PostID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setPostID($value)
	{
		$this->PostID = $value;
	}
	/**
	 * @return SiteCodeType
	 */
	function getSite()
	{
		return $this->Site;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setSite($value)
	{
		$this->Site = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
	/**
	 * @return int
	 */
	function getResponseCount()
	{
		return $this->ResponseCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setResponseCount($value)
	{
		$this->ResponseCount = $value;
	}
	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('WantItNowPostType', 'urn:ebay:apis:eBLBaseComponents');
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
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PostID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Site' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ResponseCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Title' =>
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
