<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'CategoryArrayType.php';
require_once 'PaginationResultType.php';

/**
 * Contains the keyword data for the requested categories. A category's data are 
 * contained in a CategoryArrayType object if there is no error (one or more 
 * CategoryType objects). Each CategoryType contains its ID, parent ID and keyword 
 * list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPopularKeywordsResponseType.html
 *
 */
class GetPopularKeywordsResponseType extends AbstractResponseType
{
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var CategoryArrayType
	 */
	protected $CategoryArray;
	/**
	 * @var boolean
	 */
	protected $HasMore;

	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return CategoryArrayType
	 */
	function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * @return void
	 * @param CategoryArrayType $value 
	 */
	function setCategoryArray($value)
	{
		$this->CategoryArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasMore()
	{
		return $this->HasMore;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMore($value)
	{
		$this->HasMore = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPopularKeywordsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryArray' =>
					array(
						'required' => false,
						'type' => 'CategoryArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMore' =>
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
