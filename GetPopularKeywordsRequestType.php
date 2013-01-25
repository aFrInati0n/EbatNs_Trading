<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves the words that are most frequently submitted by eBay users 
 * whensearching for listings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPopularKeywordsRequestType.html
 *
 */
class GetPopularKeywordsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var boolean
	 */
	protected $IncludeChildCategories;
	/**
	 * @var int
	 */
	protected $MaxKeywordsRetrieved;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeChildCategories($value)
	{
		$this->IncludeChildCategories = $value;
	}
	/**
	 * @return int
	 */
	function getMaxKeywordsRetrieved()
	{
		return $this->MaxKeywordsRetrieved;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxKeywordsRetrieved($value)
	{
		$this->MaxKeywordsRetrieved = $value;
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
		parent::__construct('GetPopularKeywordsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'IncludeChildCategories' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxKeywordsRetrieved' =>
					array(
						'required' => false,
						'type' => 'int',
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
