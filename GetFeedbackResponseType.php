<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'FeedbackSummaryType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'FeedbackDetailArrayType.php';

/**
 * The GetFeedback response contains the feedback summary if a TransactionID or 
 * ItemID is specified, and contains the specified user's totalfeedback score and 
 * feedback summary data if a UserID is specified. If novalue is supplied, the 
 * feedback score and feedback summary for the requestinguser will be returned. 
 * <br>If a detail level value of ReturnAll is specified, an array of all feedback 
 * records will be returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetFeedbackResponseType.html
 *
 */
class GetFeedbackResponseType extends AbstractResponseType
{
	/**
	 * @var FeedbackDetailArrayType
	 */
	protected $FeedbackDetailArray;
	/**
	 * @var int
	 */
	protected $FeedbackDetailItemTotal;
	/**
	 * @var FeedbackSummaryType
	 */
	protected $FeedbackSummary;
	/**
	 * @var int
	 */
	protected $FeedbackScore;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var int
	 */
	protected $EntriesPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;

	/**
	 * @return FeedbackDetailArrayType
	 */
	function getFeedbackDetailArray()
	{
		return $this->FeedbackDetailArray;
	}
	/**
	 * @return void
	 * @param FeedbackDetailArrayType $value 
	 */
	function setFeedbackDetailArray($value)
	{
		$this->FeedbackDetailArray = $value;
	}
	/**
	 * @return int
	 */
	function getFeedbackDetailItemTotal()
	{
		return $this->FeedbackDetailItemTotal;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackDetailItemTotal($value)
	{
		$this->FeedbackDetailItemTotal = $value;
	}
	/**
	 * @return FeedbackSummaryType
	 */
	function getFeedbackSummary()
	{
		return $this->FeedbackSummary;
	}
	/**
	 * @return void
	 * @param FeedbackSummaryType $value 
	 */
	function setFeedbackSummary($value)
	{
		$this->FeedbackSummary = $value;
	}
	/**
	 * @return int
	 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
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
	 * @return int
	 */
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackDetailArray' =>
					array(
						'required' => false,
						'type' => 'FeedbackDetailArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackDetailItemTotal' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackSummary' =>
					array(
						'required' => false,
						'type' => 'FeedbackSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EntriesPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
