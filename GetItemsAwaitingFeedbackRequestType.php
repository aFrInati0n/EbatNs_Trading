<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'ItemSortTypeCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Returns orders in which the user was involved and for which feedbackis still 
 * needed from either the buyer or seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemsAwaitingFeedbackRequestType.html
 *
 */
class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
	/**
	 * @var ItemSortTypeCodeType
	 */
	protected $Sort;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

	/**
	 * @return ItemSortTypeCodeType
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param ItemSortTypeCodeType $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
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
		parent::__construct('GetItemsAwaitingFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Sort' =>
					array(
						'required' => false,
						'type' => 'ItemSortTypeCodeType',
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
					)
				));
	}
}
?>
