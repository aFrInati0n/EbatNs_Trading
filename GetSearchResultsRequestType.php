<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'GranularityLevelCodeType.php';
require_once 'SearchLocationFilterType.php';
require_once 'QuantityOperatorCodeType.php';
require_once 'ItemTypeFilterCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'GroupType.php';
require_once 'PaymentMethodSearchCodeType.php';
require_once 'ExternalProductIDType.php';
require_once 'RequestCategoriesType.php';
require_once 'BidRangeType.php';
require_once 'PriceRangeFilterType.php';
require_once 'AffiliateTrackingDetailsType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'ItemConditionCodeType.php';
require_once 'ProximitySearchType.php';
require_once 'TicketDetailsType.php';
require_once 'UserIdFilterType.php';
require_once 'SearchSortOrderCodeType.php';
require_once 'SearchTypeCodeType.php';
require_once 'SearchStoreFilterType.php';
require_once 'SearchFlagsCodeType.php';
require_once 'SearchRequestType.php';
require_once 'PaginationType.php';

/**
 * Retrieves item listings based on keywords you specify. The keywords caninclude 
 * wildcards. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSearchResultsRequestType.html
 *
 */
class GetSearchResultsRequestType extends AbstractRequestType
{
	/**
	 * @var boolean
	 */
	protected $MotorsGermanySearchable;
	/**
	 * @var string
	 */
	protected $Query;
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var SearchFlagsCodeType
	 */
	protected $SearchFlags;
	/**
	 * @var PriceRangeFilterType
	 */
	protected $PriceRangeFilter;
	/**
	 * @var ProximitySearchType
	 */
	protected $ProximitySearch;
	/**
	 * @var ItemTypeFilterCodeType
	 */
	protected $ItemTypeFilter;
	/**
	 * @var SearchTypeCodeType
	 */
	protected $SearchType;
	/**
	 * @var UserIdFilterType
	 */
	protected $UserIdFilter;
	/**
	 * @var SearchLocationFilterType
	 */
	protected $SearchLocationFilter;
	/**
	 * @var SearchStoreFilterType
	 */
	protected $StoreSearchFilter;
	/**
	 * @var SearchSortOrderCodeType
	 */
	protected $Order;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var SearchRequestType
	 */
	protected $SearchRequest;
	/**
	 * @var string
	 */
	protected $ProductID;
	/**
	 * @var ExternalProductIDType
	 */
	protected $ExternalProductID;
	/**
	 * @var RequestCategoriesType
	 */
	protected $Categories;
	/**
	 * @var boolean
	 */
	protected $TotalOnly;
	/**
	 * @var dateTime
	 */
	protected $EndTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $EndTimeTo;
	/**
	 * @var dateTime
	 */
	protected $ModTimeFrom;
	/**
	 * @var boolean
	 */
	protected $IncludeGetItFastItems;
	/**
	 * @var PaymentMethodSearchCodeType
	 */
	protected $PaymentMethod;
	/**
	 * @var GranularityLevelCodeType
	 */
	protected $GranularityLevel;
	/**
	 * @var boolean
	 */
	protected $ExpandSearch;
	/**
	 * @var boolean
	 */
	protected $Lot;
	/**
	 * @var boolean
	 */
	protected $AdFormat;
	/**
	 * @var boolean
	 */
	protected $FreeShipping;
	/**
	 * @var int
	 */
	protected $Quantity;
	/**
	 * @var QuantityOperatorCodeType
	 */
	protected $QuantityOperator;
	/**
	 * @var SellerBusinessCodeType
	 */
	protected $SellerBusinessType;
	/**
	 * @var boolean
	 */
	protected $IncludeCondition;
	/**
	 * @var boolean
	 */
	protected $IncludeFeedback;
	/**
	 * @var int
	 */
	protected $CharityID;
	/**
	 * @var string
	 */
	protected $LocalSearchPostalCode;
	/**
	 * @var int
	 */
	protected $MaxRelatedSearchKeywords;
	/**
	 * @var AffiliateTrackingDetailsType
	 */
	protected $AffiliateTrackingDetails;
	/**
	 * @var BidRangeType
	 */
	protected $BidRange;
	/**
	 * @var ItemConditionCodeType
	 */
	protected $ItemCondition;
	/**
	 * @var TicketDetailsType
	 */
	protected $TicketFinder;
	/**
	 * @var GroupType
	 */
	protected $Group;
	/**
	 * @var boolean
	 */
	protected $HideDuplicateItems;

	/**
	 * @return boolean
	 */
	function getMotorsGermanySearchable()
	{
		return $this->MotorsGermanySearchable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setMotorsGermanySearchable($value)
	{
		$this->MotorsGermanySearchable = $value;
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
	 * @return SearchFlagsCodeType
	 * @param integer $index 
	 */
	function getSearchFlags($index = null)
	{
		if ($index !== null) {
			return $this->SearchFlags[$index];
		} else {
			return $this->SearchFlags;
		}
	}
	/**
	 * @return void
	 * @param SearchFlagsCodeType $value 
	 * @param  $index 
	 */
	function setSearchFlags($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchFlags[$index] = $value;
		} else {
			$this->SearchFlags = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchFlagsCodeType $value 
	 */
	function addSearchFlags($value)
	{
		$this->SearchFlags[] = $value;
	}
	/**
	 * @return PriceRangeFilterType
	 */
	function getPriceRangeFilter()
	{
		return $this->PriceRangeFilter;
	}
	/**
	 * @return void
	 * @param PriceRangeFilterType $value 
	 */
	function setPriceRangeFilter($value)
	{
		$this->PriceRangeFilter = $value;
	}
	/**
	 * @return ProximitySearchType
	 */
	function getProximitySearch()
	{
		return $this->ProximitySearch;
	}
	/**
	 * @return void
	 * @param ProximitySearchType $value 
	 */
	function setProximitySearch($value)
	{
		$this->ProximitySearch = $value;
	}
	/**
	 * @return ItemTypeFilterCodeType
	 */
	function getItemTypeFilter()
	{
		return $this->ItemTypeFilter;
	}
	/**
	 * @return void
	 * @param ItemTypeFilterCodeType $value 
	 */
	function setItemTypeFilter($value)
	{
		$this->ItemTypeFilter = $value;
	}
	/**
	 * @return SearchTypeCodeType
	 */
	function getSearchType()
	{
		return $this->SearchType;
	}
	/**
	 * @return void
	 * @param SearchTypeCodeType $value 
	 */
	function setSearchType($value)
	{
		$this->SearchType = $value;
	}
	/**
	 * @return UserIdFilterType
	 */
	function getUserIdFilter()
	{
		return $this->UserIdFilter;
	}
	/**
	 * @return void
	 * @param UserIdFilterType $value 
	 */
	function setUserIdFilter($value)
	{
		$this->UserIdFilter = $value;
	}
	/**
	 * @return SearchLocationFilterType
	 */
	function getSearchLocationFilter()
	{
		return $this->SearchLocationFilter;
	}
	/**
	 * @return void
	 * @param SearchLocationFilterType $value 
	 */
	function setSearchLocationFilter($value)
	{
		$this->SearchLocationFilter = $value;
	}
	/**
	 * @return SearchStoreFilterType
	 */
	function getStoreSearchFilter()
	{
		return $this->StoreSearchFilter;
	}
	/**
	 * @return void
	 * @param SearchStoreFilterType $value 
	 */
	function setStoreSearchFilter($value)
	{
		$this->StoreSearchFilter = $value;
	}
	/**
	 * @return SearchSortOrderCodeType
	 */
	function getOrder()
	{
		return $this->Order;
	}
	/**
	 * @return void
	 * @param SearchSortOrderCodeType $value 
	 */
	function setOrder($value)
	{
		$this->Order = $value;
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
	 * @return SearchRequestType
	 */
	function getSearchRequest()
	{
		return $this->SearchRequest;
	}
	/**
	 * @return void
	 * @param SearchRequestType $value 
	 */
	function setSearchRequest($value)
	{
		$this->SearchRequest = $value;
	}
	/**
	 * @return string
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return ExternalProductIDType
	 */
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}
	/**
	 * @return void
	 * @param ExternalProductIDType $value 
	 */
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}
	/**
	 * @return RequestCategoriesType
	 */
	function getCategories()
	{
		return $this->Categories;
	}
	/**
	 * @return void
	 * @param RequestCategoriesType $value 
	 */
	function setCategories($value)
	{
		$this->Categories = $value;
	}
	/**
	 * @return boolean
	 */
	function getTotalOnly()
	{
		return $this->TotalOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setTotalOnly($value)
	{
		$this->TotalOnly = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}
	/**
	 * @return dateTime
	 */
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeGetItFastItems()
	{
		return $this->IncludeGetItFastItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeGetItFastItems($value)
	{
		$this->IncludeGetItFastItems = $value;
	}
	/**
	 * @return PaymentMethodSearchCodeType
	 */
	function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * @return void
	 * @param PaymentMethodSearchCodeType $value 
	 */
	function setPaymentMethod($value)
	{
		$this->PaymentMethod = $value;
	}
	/**
	 * @return GranularityLevelCodeType
	 */
	function getGranularityLevel()
	{
		return $this->GranularityLevel;
	}
	/**
	 * @return void
	 * @param GranularityLevelCodeType $value 
	 */
	function setGranularityLevel($value)
	{
		$this->GranularityLevel = $value;
	}
	/**
	 * @return boolean
	 */
	function getExpandSearch()
	{
		return $this->ExpandSearch;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpandSearch($value)
	{
		$this->ExpandSearch = $value;
	}
	/**
	 * @return boolean
	 */
	function getLot()
	{
		return $this->Lot;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLot($value)
	{
		$this->Lot = $value;
	}
	/**
	 * @return boolean
	 */
	function getAdFormat()
	{
		return $this->AdFormat;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAdFormat($value)
	{
		$this->AdFormat = $value;
	}
	/**
	 * @return boolean
	 */
	function getFreeShipping()
	{
		return $this->FreeShipping;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFreeShipping($value)
	{
		$this->FreeShipping = $value;
	}
	/**
	 * @return int
	 */
	function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantity($value)
	{
		$this->Quantity = $value;
	}
	/**
	 * @return QuantityOperatorCodeType
	 */
	function getQuantityOperator()
	{
		return $this->QuantityOperator;
	}
	/**
	 * @return void
	 * @param QuantityOperatorCodeType $value 
	 */
	function setQuantityOperator($value)
	{
		$this->QuantityOperator = $value;
	}
	/**
	 * @return SellerBusinessCodeType
	 */
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * @return void
	 * @param SellerBusinessCodeType $value 
	 */
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeCondition()
	{
		return $this->IncludeCondition;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeCondition($value)
	{
		$this->IncludeCondition = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeFeedback()
	{
		return $this->IncludeFeedback;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeFeedback($value)
	{
		$this->IncludeFeedback = $value;
	}
	/**
	 * @return int
	 */
	function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}
	/**
	 * @return string
	 */
	function getLocalSearchPostalCode()
	{
		return $this->LocalSearchPostalCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLocalSearchPostalCode($value)
	{
		$this->LocalSearchPostalCode = $value;
	}
	/**
	 * @return int
	 */
	function getMaxRelatedSearchKeywords()
	{
		return $this->MaxRelatedSearchKeywords;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxRelatedSearchKeywords($value)
	{
		$this->MaxRelatedSearchKeywords = $value;
	}
	/**
	 * @return AffiliateTrackingDetailsType
	 */
	function getAffiliateTrackingDetails()
	{
		return $this->AffiliateTrackingDetails;
	}
	/**
	 * @return void
	 * @param AffiliateTrackingDetailsType $value 
	 */
	function setAffiliateTrackingDetails($value)
	{
		$this->AffiliateTrackingDetails = $value;
	}
	/**
	 * @return BidRangeType
	 */
	function getBidRange()
	{
		return $this->BidRange;
	}
	/**
	 * @return void
	 * @param BidRangeType $value 
	 */
	function setBidRange($value)
	{
		$this->BidRange = $value;
	}
	/**
	 * @return ItemConditionCodeType
	 */
	function getItemCondition()
	{
		return $this->ItemCondition;
	}
	/**
	 * @return void
	 * @param ItemConditionCodeType $value 
	 */
	function setItemCondition($value)
	{
		$this->ItemCondition = $value;
	}
	/**
	 * @return TicketDetailsType
	 */
	function getTicketFinder()
	{
		return $this->TicketFinder;
	}
	/**
	 * @return void
	 * @param TicketDetailsType $value 
	 */
	function setTicketFinder($value)
	{
		$this->TicketFinder = $value;
	}
	/**
	 * @return GroupType
	 */
	function getGroup()
	{
		return $this->Group;
	}
	/**
	 * @return void
	 * @param GroupType $value 
	 */
	function setGroup($value)
	{
		$this->Group = $value;
	}
	/**
	 * @return boolean
	 */
	function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHideDuplicateItems($value)
	{
		$this->HideDuplicateItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSearchResultsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MotorsGermanySearchable' =>
					array(
						'required' => false,
						'type' => 'boolean',
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
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchFlags' =>
					array(
						'required' => false,
						'type' => 'SearchFlagsCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PriceRangeFilter' =>
					array(
						'required' => false,
						'type' => 'PriceRangeFilterType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProximitySearch' =>
					array(
						'required' => false,
						'type' => 'ProximitySearchType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemTypeFilter' =>
					array(
						'required' => false,
						'type' => 'ItemTypeFilterCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchType' =>
					array(
						'required' => false,
						'type' => 'SearchTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserIdFilter' =>
					array(
						'required' => false,
						'type' => 'UserIdFilterType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchLocationFilter' =>
					array(
						'required' => false,
						'type' => 'SearchLocationFilterType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreSearchFilter' =>
					array(
						'required' => false,
						'type' => 'SearchStoreFilterType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Order' =>
					array(
						'required' => false,
						'type' => 'SearchSortOrderCodeType',
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
					'SearchRequest' =>
					array(
						'required' => false,
						'type' => 'SearchRequestType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalProductID' =>
					array(
						'required' => false,
						'type' => 'ExternalProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Categories' =>
					array(
						'required' => false,
						'type' => 'RequestCategoriesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ModTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeGetItFastItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentMethod' =>
					array(
						'required' => false,
						'type' => 'PaymentMethodSearchCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GranularityLevel' =>
					array(
						'required' => false,
						'type' => 'GranularityLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExpandSearch' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Lot' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AdFormat' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FreeShipping' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Quantity' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityOperator' =>
					array(
						'required' => false,
						'type' => 'QuantityOperatorCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerBusinessType' =>
					array(
						'required' => false,
						'type' => 'SellerBusinessCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeCondition' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeFeedback' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LocalSearchPostalCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxRelatedSearchKeywords' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AffiliateTrackingDetails' =>
					array(
						'required' => false,
						'type' => 'AffiliateTrackingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidRange' =>
					array(
						'required' => false,
						'type' => 'BidRangeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemCondition' =>
					array(
						'required' => false,
						'type' => 'ItemConditionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TicketFinder' =>
					array(
						'required' => false,
						'type' => 'TicketDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Group' =>
					array(
						'required' => false,
						'type' => 'GroupType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HideDuplicateItems' =>
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
