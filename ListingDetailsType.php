<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellerBusinessCodeType.php';
require_once 'AmountType.php';
require_once 'ItemIDType.php';

/**
 * Various details about a listing. Some of the details are calculated or derived 
 * afteran item is listed. The details in this type include the start and end time 
 * andthe converted (localized) prices. The details in this type also includeinput 
 * values applicable to the Best Offer feature.Additional details in this type 
 * include flags indicating if a sellerspecified fields whose values are not 
 * visible to the requesting user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingDetailsType.html
 *
 */
class ListingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $Adult;
	/**
	 * @var boolean
	 */
	protected $BindingAuction;
	/**
	 * @var boolean
	 */
	protected $CheckoutEnabled;
	/**
	 * @var AmountType
	 */
	protected $ConvertedBuyItNowPrice;
	/**
	 * @var AmountType
	 */
	protected $ConvertedStartPrice;
	/**
	 * @var AmountType
	 */
	protected $ConvertedReservePrice;
	/**
	 * @var boolean
	 */
	protected $HasReservePrice;
	/**
	 * @var ItemIDType
	 */
	protected $RelistedItemID;
	/**
	 * @var ItemIDType
	 */
	protected $SecondChanceOriginalItemID;
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var dateTime
	 */
	protected $EndTime;
	/**
	 * @var anyURI
	 */
	protected $ViewItemURL;
	/**
	 * @var boolean
	 */
	protected $HasUnansweredQuestions;
	/**
	 * @var boolean
	 */
	protected $HasPublicMessages;
	/**
	 * @var boolean
	 */
	protected $BuyItNowAvailable;
	/**
	 * @var SellerBusinessCodeType
	 */
	protected $SellerBusinessType;
	/**
	 * @var AmountType
	 */
	protected $MinimumBestOfferPrice;
	/**
	 * @var string
	 */
	protected $MinimumBestOfferMessage;
	/**
	 * @var string
	 */
	protected $LocalListingDistance;
	/**
	 * @var ItemIDType
	 */
	protected $TCROriginalItemID;
	/**
	 * @var anyURI
	 */
	protected $ViewItemURLForNaturalSearch;
	/**
	 * @var boolean
	 */
	protected $PayPerLeadEnabled;
	/**
	 * @var AmountType
	 */
	protected $BestOfferAutoAcceptPrice;

	/**
	 * @return boolean
	 */
	function getAdult()
	{
		return $this->Adult;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAdult($value)
	{
		$this->Adult = $value;
	}
	/**
	 * @return boolean
	 */
	function getBindingAuction()
	{
		return $this->BindingAuction;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBindingAuction($value)
	{
		$this->BindingAuction = $value;
	}
	/**
	 * @return boolean
	 */
	function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCheckoutEnabled($value)
	{
		$this->CheckoutEnabled = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedBuyItNowPrice($value)
	{
		$this->ConvertedBuyItNowPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedStartPrice()
	{
		return $this->ConvertedStartPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedStartPrice($value)
	{
		$this->ConvertedStartPrice = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedReservePrice()
	{
		return $this->ConvertedReservePrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedReservePrice($value)
	{
		$this->ConvertedReservePrice = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasReservePrice()
	{
		return $this->HasReservePrice;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasReservePrice($value)
	{
		$this->HasReservePrice = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getRelistedItemID()
	{
		return $this->RelistedItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setRelistedItemID($value)
	{
		$this->RelistedItemID = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getSecondChanceOriginalItemID()
	{
		return $this->SecondChanceOriginalItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setSecondChanceOriginalItemID($value)
	{
		$this->SecondChanceOriginalItemID = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return anyURI
	 */
	function getViewItemURL()
	{
		return $this->ViewItemURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setViewItemURL($value)
	{
		$this->ViewItemURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasUnansweredQuestions()
	{
		return $this->HasUnansweredQuestions;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasUnansweredQuestions($value)
	{
		$this->HasUnansweredQuestions = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasPublicMessages()
	{
		return $this->HasPublicMessages;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasPublicMessages($value)
	{
		$this->HasPublicMessages = $value;
	}
	/**
	 * @return boolean
	 */
	function getBuyItNowAvailable()
	{
		return $this->BuyItNowAvailable;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBuyItNowAvailable($value)
	{
		$this->BuyItNowAvailable = $value;
	}
	/**
	 * @return SellerBusinessCodeType
	 */
	function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * @return void
	 * @param SellerBusinessCodeType $value 
	 */
	function setSellerBusinessType($value)
	{
		$this->SellerBusinessType = $value;
	}
	/**
	 * @return AmountType
	 */
	function getMinimumBestOfferPrice()
	{
		return $this->MinimumBestOfferPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setMinimumBestOfferPrice($value)
	{
		$this->MinimumBestOfferPrice = $value;
	}
	/**
	 * @return string
	 */
	function getMinimumBestOfferMessage()
	{
		return $this->MinimumBestOfferMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMinimumBestOfferMessage($value)
	{
		$this->MinimumBestOfferMessage = $value;
	}
	/**
	 * @return string
	 */
	function getLocalListingDistance()
	{
		return $this->LocalListingDistance;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLocalListingDistance($value)
	{
		$this->LocalListingDistance = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getTCROriginalItemID()
	{
		return $this->TCROriginalItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setTCROriginalItemID($value)
	{
		$this->TCROriginalItemID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getViewItemURLForNaturalSearch()
	{
		return $this->ViewItemURLForNaturalSearch;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setViewItemURLForNaturalSearch($value)
	{
		$this->ViewItemURLForNaturalSearch = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPerLeadEnabled()
	{
		return $this->PayPerLeadEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPerLeadEnabled($value)
	{
		$this->PayPerLeadEnabled = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBestOfferAutoAcceptPrice()
	{
		return $this->BestOfferAutoAcceptPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBestOfferAutoAcceptPrice($value)
	{
		$this->BestOfferAutoAcceptPrice = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Adult' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BindingAuction' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CheckoutEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedBuyItNowPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedStartPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedReservePrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasReservePrice' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RelistedItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SecondChanceOriginalItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ViewItemURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasUnansweredQuestions' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasPublicMessages' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyItNowAvailable' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerBusinessType' =>
					array(
						'required' => false,
						'type' => 'SellerBusinessCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumBestOfferPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumBestOfferMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LocalListingDistance' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TCROriginalItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ViewItemURLForNaturalSearch' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPerLeadEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferAutoAcceptPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
