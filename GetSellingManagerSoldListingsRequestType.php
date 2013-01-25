<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerSoldListingsPropertyTypeCodeType.php';
require_once 'PaginationType.php';
require_once 'SellingManagerSoldListingsSortTypeCodeType.php';
require_once 'SellingManagerSearchType.php';
require_once 'SortOrderCodeType.php';
require_once 'TimeRangeType.php';
require_once 'AbstractRequestType.php';

/**
 * Returns a Selling Manager user's sold listings.<br><br>This call is subject to 
 * change without notice; the deprecation process isinapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerSoldListingsRequestType.html
 *
 */
class GetSellingManagerSoldListingsRequestType extends AbstractRequestType
{
	/**
	 * @var SellingManagerSearchType
	 */
	protected $Search;
	/**
	 * @var long
	 */
	protected $StoreCategoryID;
	/**
	 * @var SellingManagerSoldListingsPropertyTypeCodeType
	 */
	protected $Filter;
	/**
	 * @var boolean
	 */
	protected $Archived;
	/**
	 * @var SellingManagerSoldListingsSortTypeCodeType
	 */
	protected $Sort;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var TimeRangeType
	 */
	protected $SaleDateRange;

	/**
	 * @return SellingManagerSearchType
	 */
	function getSearch()
	{
		return $this->Search;
	}
	/**
	 * @return void
	 * @param SellingManagerSearchType $value 
	 */
	function setSearch($value)
	{
		$this->Search = $value;
	}
	/**
	 * @return long
	 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
	/**
	 * @return SellingManagerSoldListingsPropertyTypeCodeType
	 * @param integer $index 
	 */
	function getFilter($index = null)
	{
		if ($index !== null) {
			return $this->Filter[$index];
		} else {
			return $this->Filter;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerSoldListingsPropertyTypeCodeType $value 
	 * @param  $index 
	 */
	function setFilter($value, $index = null)
	{
		if ($index !== null) {
			$this->Filter[$index] = $value;
		} else {
			$this->Filter = $value;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerSoldListingsPropertyTypeCodeType $value 
	 */
	function addFilter($value)
	{
		$this->Filter[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getArchived()
	{
		return $this->Archived;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setArchived($value)
	{
		$this->Archived = $value;
	}
	/**
	 * @return SellingManagerSoldListingsSortTypeCodeType
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param SellingManagerSoldListingsSortTypeCodeType $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
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
	 * @return TimeRangeType
	 */
	function getSaleDateRange()
	{
		return $this->SaleDateRange;
	}
	/**
	 * @return void
	 * @param TimeRangeType $value 
	 */
	function setSaleDateRange($value)
	{
		$this->SaleDateRange = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerSoldListingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Search' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSearchType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Filter' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSoldListingsPropertyTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Archived' =>
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
						'type' => 'SellingManagerSoldListingsSortTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortOrder' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					),
					'SaleDateRange' =>
					array(
						'required' => false,
						'type' => 'TimeRangeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
