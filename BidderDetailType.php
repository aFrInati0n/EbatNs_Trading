<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains the data for a user who is interested in bidding on items in a Live 
 * Auctions catalog. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BidderDetailType.html
 *
 */
class BidderDetailType extends EbatNs_ComplexType
{
	/**
	 * @var UserIDType
	 */
	protected $UserID;
	/**
	 * @var string
	 */
	protected $Email;
	/**
	 * @var int
	 */
	protected $FeedbackScore;
	/**
	 * @var int
	 */
	protected $UniqueNegativeFeedbackCount;
	/**
	 * @var int
	 */
	protected $UniquePositiveFeedbackCount;
	/**
	 * @var int
	 */
	protected $UniqueNeutralFeedbackCount;

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
	 * @return string
	 */
	function getEmail()
	{
		return $this->Email;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEmail($value)
	{
		$this->Email = $value;
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
	 * @return int
	 */
	function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUniqueNegativeFeedbackCount($value)
	{
		$this->UniqueNegativeFeedbackCount = $value;
	}
	/**
	 * @return int
	 */
	function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUniquePositiveFeedbackCount($value)
	{
		$this->UniquePositiveFeedbackCount = $value;
	}
	/**
	 * @return int
	 */
	function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUniqueNeutralFeedbackCount($value)
	{
		$this->UniqueNeutralFeedbackCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BidderDetailType', 'urn:ebay:apis:eBLBaseComponents');
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
					'Email' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					'UniqueNegativeFeedbackCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UniquePositiveFeedbackCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UniqueNeutralFeedbackCount' =>
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
