<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'StoreSearchCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * One of the data filters used when searching for items usingGetSearchResults. 
 * Allows filtering based on an item's appearing in aspecific eBay Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchStoreFilterType.html
 *
 */
class SearchStoreFilterType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $StoreName;
	/**
	 * @var StoreSearchCodeType
	 */
	protected $StoreSearch;

	/**
	 * @return string
	 */
	function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}
	/**
	 * @return StoreSearchCodeType
	 */
	function getStoreSearch()
	{
		return $this->StoreSearch;
	}
	/**
	 * @return void
	 * @param StoreSearchCodeType $value 
	 */
	function setStoreSearch($value)
	{
		$this->StoreSearch = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchStoreFilterType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StoreName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreSearch' =>
					array(
						'required' => false,
						'type' => 'StoreSearchCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
