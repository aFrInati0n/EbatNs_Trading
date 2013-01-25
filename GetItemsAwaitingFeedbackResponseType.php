<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'PaginatedTransactionArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Response to GetItemsAwaitingFeedback. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetItemsAwaitingFeedbackResponseType.html
 *
 */
class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{
	/**
	 * @var PaginatedTransactionArrayType
	 */
	protected $ItemsAwaitingFeedback;

	/**
	 * @return PaginatedTransactionArrayType
	 */
	function getItemsAwaitingFeedback()
	{
		return $this->ItemsAwaitingFeedback;
	}
	/**
	 * @return void
	 * @param PaginatedTransactionArrayType $value 
	 */
	function setItemsAwaitingFeedback($value)
	{
		$this->ItemsAwaitingFeedback = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetItemsAwaitingFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemsAwaitingFeedback' =>
					array(
						'required' => false,
						'type' => 'PaginatedTransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
