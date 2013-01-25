<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'FeedbackPeriodType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Container for a set of feedback statistics. Contains zero one ormultiple 
 * FeedbackPeriod objects. Output only, for the summaryfeedback data returned by 
 * GetFeedback. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FeedbackPeriodArrayType.html
 *
 */
class FeedbackPeriodArrayType extends EbatNs_ComplexType
{
	/**
	 * @var FeedbackPeriodType
	 */
	protected $FeedbackPeriod;

	/**
	 * @return FeedbackPeriodType
	 * @param integer $index 
	 */
	function getFeedbackPeriod($index = null)
	{
		if ($index !== null) {
			return $this->FeedbackPeriod[$index];
		} else {
			return $this->FeedbackPeriod;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 * @param  $index 
	 */
	function setFeedbackPeriod($value, $index = null)
	{
		if ($index !== null) {
			$this->FeedbackPeriod[$index] = $value;
		} else {
			$this->FeedbackPeriod = $value;
		}
	}
	/**
	 * @return void
	 * @param FeedbackPeriodType $value 
	 */
	function addFeedbackPeriod($value)
	{
		$this->FeedbackPeriod[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FeedbackPeriodArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackPeriod' =>
					array(
						'required' => false,
						'type' => 'FeedbackPeriodType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
