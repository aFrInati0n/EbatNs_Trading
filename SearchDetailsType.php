<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchDetailsType.html
 *
 */
class SearchDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $BuyItNowEnabled;
	/**
	 * @var boolean
	 */
	protected $Picture;
	/**
	 * @var boolean
	 */
	protected $RecentListing;

	/**
	 * @return boolean
	 */
	function getBuyItNowEnabled()
	{
		return $this->BuyItNowEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBuyItNowEnabled($value)
	{
		$this->BuyItNowEnabled = $value;
	}
	/**
	 * @return boolean
	 */
	function getPicture()
	{
		return $this->Picture;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPicture($value)
	{
		$this->Picture = $value;
	}
	/**
	 * @return boolean
	 */
	function getRecentListing()
	{
		return $this->RecentListing;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRecentListing($value)
	{
		$this->RecentListing = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BuyItNowEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Picture' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RecentListing' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
