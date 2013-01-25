<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'HighlightCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'HomePageFeaturedCodeType.php';
require_once 'FeaturedFirstCodeType.php';
require_once 'BorderCodeType.php';
require_once 'GiftIconCodeType.php';
require_once 'BoldTitleCodeType.php';
require_once 'ProPackCodeType.php';
require_once 'FeaturedPlusCodeType.php';

/**
 * Details about feature availability for the site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ListingFeatureDetailsType.html
 *
 */
class ListingFeatureDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var BoldTitleCodeType
	 */
	protected $BoldTitle;
	/**
	 * @var BorderCodeType
	 */
	protected $Border;
	/**
	 * @var HighlightCodeType
	 */
	protected $Highlight;
	/**
	 * @var GiftIconCodeType
	 */
	protected $GiftIcon;
	/**
	 * @var HomePageFeaturedCodeType
	 */
	protected $HomePageFeatured;
	/**
	 * @var FeaturedFirstCodeType
	 */
	protected $FeaturedFirst;
	/**
	 * @var FeaturedPlusCodeType
	 */
	protected $FeaturedPlus;
	/**
	 * @var ProPackCodeType
	 */
	protected $ProPack;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return BoldTitleCodeType
	 */
	function getBoldTitle()
	{
		return $this->BoldTitle;
	}
	/**
	 * @return void
	 * @param BoldTitleCodeType $value 
	 */
	function setBoldTitle($value)
	{
		$this->BoldTitle = $value;
	}
	/**
	 * @return BorderCodeType
	 */
	function getBorder()
	{
		return $this->Border;
	}
	/**
	 * @return void
	 * @param BorderCodeType $value 
	 */
	function setBorder($value)
	{
		$this->Border = $value;
	}
	/**
	 * @return HighlightCodeType
	 */
	function getHighlight()
	{
		return $this->Highlight;
	}
	/**
	 * @return void
	 * @param HighlightCodeType $value 
	 */
	function setHighlight($value)
	{
		$this->Highlight = $value;
	}
	/**
	 * @return GiftIconCodeType
	 */
	function getGiftIcon()
	{
		return $this->GiftIcon;
	}
	/**
	 * @return void
	 * @param GiftIconCodeType $value 
	 */
	function setGiftIcon($value)
	{
		$this->GiftIcon = $value;
	}
	/**
	 * @return HomePageFeaturedCodeType
	 */
	function getHomePageFeatured()
	{
		return $this->HomePageFeatured;
	}
	/**
	 * @return void
	 * @param HomePageFeaturedCodeType $value 
	 */
	function setHomePageFeatured($value)
	{
		$this->HomePageFeatured = $value;
	}
	/**
	 * @return FeaturedFirstCodeType
	 */
	function getFeaturedFirst()
	{
		return $this->FeaturedFirst;
	}
	/**
	 * @return void
	 * @param FeaturedFirstCodeType $value 
	 */
	function setFeaturedFirst($value)
	{
		$this->FeaturedFirst = $value;
	}
	/**
	 * @return FeaturedPlusCodeType
	 */
	function getFeaturedPlus()
	{
		return $this->FeaturedPlus;
	}
	/**
	 * @return void
	 * @param FeaturedPlusCodeType $value 
	 */
	function setFeaturedPlus($value)
	{
		$this->FeaturedPlus = $value;
	}
	/**
	 * @return ProPackCodeType
	 */
	function getProPack()
	{
		return $this->ProPack;
	}
	/**
	 * @return void
	 * @param ProPackCodeType $value 
	 */
	function setProPack($value)
	{
		$this->ProPack = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ListingFeatureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BoldTitle' =>
					array(
						'required' => false,
						'type' => 'BoldTitleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Border' =>
					array(
						'required' => false,
						'type' => 'BorderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Highlight' =>
					array(
						'required' => false,
						'type' => 'HighlightCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GiftIcon' =>
					array(
						'required' => false,
						'type' => 'GiftIconCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HomePageFeatured' =>
					array(
						'required' => false,
						'type' => 'HomePageFeaturedCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeaturedFirst' =>
					array(
						'required' => false,
						'type' => 'FeaturedFirstCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeaturedPlus' =>
					array(
						'required' => false,
						'type' => 'FeaturedPlusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProPack' =>
					array(
						'required' => false,
						'type' => 'ProPackCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
