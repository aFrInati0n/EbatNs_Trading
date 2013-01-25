<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'ItemArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'UserType.php';

/**
 * Response to a GetBidderList call, which retrieves all items the user is 
 * currently bidding on, orhas won or purchased. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetBidderListResponseType.html
 *
 */
class GetBidderListResponseType extends AbstractResponseType
{
	/**
	 * @var UserType
	 */
	protected $Bidder;
	/**
	 * @var ItemArrayType
	 */
	protected $BidItemArray;

	/**
	 * @return UserType
	 */
	function getBidder()
	{
		return $this->Bidder;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setBidder($value)
	{
		$this->Bidder = $value;
	}
	/**
	 * @return ItemArrayType
	 */
	function getBidItemArray()
	{
		return $this->BidItemArray;
	}
	/**
	 * @return void
	 * @param ItemArrayType $value 
	 */
	function setBidItemArray($value)
	{
		$this->BidItemArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetBidderListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Bidder' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BidItemArray' =>
					array(
						'required' => false,
						'type' => 'ItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
