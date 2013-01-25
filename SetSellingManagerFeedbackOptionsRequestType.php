<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'AutomatedLeaveFeedbackEventCodeType.php';
require_once 'FeedbackCommentArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables Selling Manager subscribers to store standard feedback comments that 
 * canbe left for their buyers. Selling Manager Pro subscribers can also specify 
 * whatevents, if any, will trigger an automated feedback to buyers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetSellingManagerFeedbackOptionsRequestType.html
 *
 */
class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
	/**
	 * @var AutomatedLeaveFeedbackEventCodeType
	 */
	protected $AutomatedLeaveFeedbackEvent;
	/**
	 * @var FeedbackCommentArrayType
	 */
	protected $StoredComments;

	/**
	 * @return AutomatedLeaveFeedbackEventCodeType
	 */
	function getAutomatedLeaveFeedbackEvent()
	{
		return $this->AutomatedLeaveFeedbackEvent;
	}
	/**
	 * @return void
	 * @param AutomatedLeaveFeedbackEventCodeType $value 
	 */
	function setAutomatedLeaveFeedbackEvent($value)
	{
		$this->AutomatedLeaveFeedbackEvent = $value;
	}
	/**
	 * @return FeedbackCommentArrayType
	 */
	function getStoredComments()
	{
		return $this->StoredComments;
	}
	/**
	 * @return void
	 * @param FeedbackCommentArrayType $value 
	 */
	function setStoredComments($value)
	{
		$this->StoredComments = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetSellingManagerFeedbackOptionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AutomatedLeaveFeedbackEvent' =>
					array(
						'required' => false,
						'type' => 'AutomatedLeaveFeedbackEventCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoredComments' =>
					array(
						'required' => false,
						'type' => 'FeedbackCommentArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
