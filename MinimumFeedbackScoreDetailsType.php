<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * [Selling] The minimum feedback score used to determine whether a buyer should be 
 * blocked from bidding. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MinimumFeedbackScoreDetailsType.html
 *
 */
class MinimumFeedbackScoreDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $FeedbackScore;

	/**
	 * @return int
	 * @param integer $index 
	 */
	function getFeedbackScore($index = null)
	{
		if ($index !== null) {
			return $this->FeedbackScore[$index];
		} else {
			return $this->FeedbackScore;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setFeedbackScore($value, $index = null)
	{
		if ($index !== null) {
			$this->FeedbackScore[$index] = $value;
		} else {
			$this->FeedbackScore = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addFeedbackScore($value)
	{
		$this->FeedbackScore[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MinimumFeedbackScoreDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
