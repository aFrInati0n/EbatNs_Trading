<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';
require_once 'ItemType.php';
require_once 'SearchResultValuesCodeType.php';

/**
 * Contains the data for one item listing found by a search (such as 
 * byGetSearchResults). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SearchResultItemType.html
 *
 */
class SearchResultItemType extends EbatNs_ComplexType
{
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecific;
	/**
	 * @var SearchResultValuesCodeType
	 */
	protected $SearchResultValues;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecific()
	{
		return $this->ItemSpecific;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecific($value)
	{
		$this->ItemSpecific = $value;
	}
	/**
	 * @return SearchResultValuesCodeType
	 * @param integer $index 
	 */
	function getSearchResultValues($index = null)
	{
		if ($index !== null) {
			return $this->SearchResultValues[$index];
		} else {
			return $this->SearchResultValues;
		}
	}
	/**
	 * @return void
	 * @param SearchResultValuesCodeType $value 
	 * @param  $index 
	 */
	function setSearchResultValues($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchResultValues[$index] = $value;
		} else {
			$this->SearchResultValues = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchResultValuesCodeType $value 
	 */
	function addSearchResultValues($value)
	{
		$this->SearchResultValues[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SearchResultItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecific' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchResultValues' =>
					array(
						'required' => false,
						'type' => 'SearchResultValuesCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
