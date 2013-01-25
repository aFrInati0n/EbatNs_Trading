<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'PaginationType.php';
require_once 'GranularityLevelCodeType.php';
require_once 'SKUArrayType.php';
require_once 'AbstractRequestType.php';
require_once 'UserIDArrayType.php';

/**
 * Returns a list of the items posted by the authenticated user, includingthe 
 * related item data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerListRequestType.html
 *
 */
class GetSellerListRequestType extends AbstractRequestType
{
	/**
	 * @var UserIDType
	 */
	protected $UserID;
	/**
	 * @var UserIDArrayType
	 */
	protected $MotorsDealerUsers;
	/**
	 * @var dateTime
	 */
	protected $EndTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $EndTimeTo;
	/**
	 * @var int
	 */
	protected $Sort;
	/**
	 * @var dateTime
	 */
	protected $StartTimeFrom;
	/**
	 * @var dateTime
	 */
	protected $StartTimeTo;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var GranularityLevelCodeType
	 */
	protected $GranularityLevel;
	/**
	 * @var SKUArrayType
	 */
	protected $SKUArray;
	/**
	 * @var boolean
	 */
	protected $IncludeWatchCount;
	/**
	 * @var boolean
	 */
	protected $AdminEndedItemsOnly;
	/**
	 * @var int
	 */
	protected $CategoryID;
	/**
	 * @var boolean
	 */
	protected $IncludeVariations;

	/**
	 * @return UserIDType
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return UserIDArrayType
	 */
	function getMotorsDealerUsers()
	{
		return $this->MotorsDealerUsers;
	}
	/**
	 * @return void
	 * @param UserIDArrayType $value 
	 */
	function setMotorsDealerUsers($value)
	{
		$this->MotorsDealerUsers = $value;
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
	 * @return int
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTimeFrom()
	{
		return $this->StartTimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTimeFrom($value)
	{
		$this->StartTimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTimeTo()
	{
		return $this->StartTimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTimeTo($value)
	{
		$this->StartTimeTo = $value;
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
	 * @return SKUArrayType
	 */
	function getSKUArray()
	{
		return $this->SKUArray;
	}
	/**
	 * @return void
	 * @param SKUArrayType $value 
	 */
	function setSKUArray($value)
	{
		$this->SKUArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeWatchCount($value)
	{
		$this->IncludeWatchCount = $value;
	}
	/**
	 * @return boolean
	 */
	function getAdminEndedItemsOnly()
	{
		return $this->AdminEndedItemsOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAdminEndedItemsOnly($value)
	{
		$this->AdminEndedItemsOnly = $value;
	}
	/**
	 * @return int
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeVariations()
	{
		return $this->IncludeVariations;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeVariations($value)
	{
		$this->IncludeVariations = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UserID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MotorsDealerUsers' =>
					array(
						'required' => false,
						'type' => 'UserIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					'Sort' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
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
					),
					'GranularityLevel' =>
					array(
						'required' => false,
						'type' => 'GranularityLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SKUArray' =>
					array(
						'required' => false,
						'type' => 'SKUArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeWatchCount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AdminEndedItemsOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeVariations' =>
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
