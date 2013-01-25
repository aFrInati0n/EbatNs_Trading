<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'CountryCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemLocationCodeType.php';
require_once 'SearchLocationType.php';
require_once 'CurrencyCodeType.php';

/**
 * One of the data filters used when searching for items using GetSearchResults. 
 * Allows filtering based on an item's location (where the seller would be shipping 
 * the item from) or an item's availability (which eBay sites the item can be 
 * purchased from). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchLocationFilterType.html
 *
 */
class SearchLocationFilterType extends EbatNs_ComplexType
{
	/**
	 * @var CountryCodeType
	 */
	protected $CountryCode;
	/**
	 * @var ItemLocationCodeType
	 */
	protected $ItemLocation;
	/**
	 * @var SearchLocationType
	 */
	protected $SearchLocation;
	/**
	 * @var CurrencyCodeType
	 */
	protected $Currency;

	/**
	 * @return CountryCodeType
	 */
	function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setCountryCode($value)
	{
		$this->CountryCode = $value;
	}
	/**
	 * @return ItemLocationCodeType
	 */
	function getItemLocation()
	{
		return $this->ItemLocation;
	}
	/**
	 * @return void
	 * @param ItemLocationCodeType $value 
	 */
	function setItemLocation($value)
	{
		$this->ItemLocation = $value;
	}
	/**
	 * @return SearchLocationType
	 */
	function getSearchLocation()
	{
		return $this->SearchLocation;
	}
	/**
	 * @return void
	 * @param SearchLocationType $value 
	 */
	function setSearchLocation($value)
	{
		$this->SearchLocation = $value;
	}
	/**
	 * @return CurrencyCodeType
	 */
	function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * @return void
	 * @param CurrencyCodeType $value 
	 */
	function setCurrency($value)
	{
		$this->Currency = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchLocationFilterType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CountryCode' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemLocation' =>
					array(
						'required' => false,
						'type' => 'ItemLocationCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchLocation' =>
					array(
						'required' => false,
						'type' => 'SearchLocationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Currency' =>
					array(
						'required' => false,
						'type' => 'CurrencyCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
