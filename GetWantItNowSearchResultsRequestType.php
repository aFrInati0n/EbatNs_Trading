<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves a list of active Want It Now posts that match specified keywordsand/or 
 * a specific category ID. The response contains the following data:CategoryID, 
 * PostID, StartTime, ResponseCount, Site, and Title. To get the postdescription 
 * (Description), you must use GetWantItNowPost to retrieve individualposts. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetWantItNowSearchResultsRequestType.html
 *
 */
class GetWantItNowSearchResultsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var string
	 */
	protected $Query;
	/**
	 * @var boolean
	 */
	protected $SearchInDescription;
	/**
	 * @var boolean
	 */
	protected $SearchWorldwide;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

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
	function getQuery()
	{
		return $this->Query;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQuery($value)
	{
		$this->Query = $value;
	}
	/**
	 * @return boolean
	 */
	function getSearchInDescription()
	{
		return $this->SearchInDescription;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSearchInDescription($value)
	{
		$this->SearchInDescription = $value;
	}
	/**
	 * @return boolean
	 */
	function getSearchWorldwide()
	{
		return $this->SearchWorldwide;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSearchWorldwide($value)
	{
		$this->SearchWorldwide = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetWantItNowSearchResultsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'Query' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchInDescription' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchWorldwide' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
