<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'CharacteristicType.php';
require_once 'DataElementSetType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicsSearchCodeType.php';
require_once 'CharacteristicsSetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductSearchPageType.html
 *
 */
class ProductSearchPageType extends EbatNs_ComplexType
{
	/**
	 * @var CharacteristicsSetType
	 */
	protected $SearchCharacteristicsSet;
	/**
	 * @var CharacteristicsSearchCodeType
	 */
	protected $SearchType;
	/**
	 * @var CharacteristicType
	 */
	protected $SortCharacteristics;
	/**
	 * @var DataElementSetType
	 */
	protected $DataElementSet;

	/**
	 * @return CharacteristicsSetType
	 */
	function getSearchCharacteristicsSet()
	{
		return $this->SearchCharacteristicsSet;
	}
	/**
	 * @return void
	 * @param CharacteristicsSetType $value 
	 */
	function setSearchCharacteristicsSet($value)
	{
		$this->SearchCharacteristicsSet = $value;
	}
	/**
	 * @return CharacteristicsSearchCodeType
	 */
	function getSearchType()
	{
		return $this->SearchType;
	}
	/**
	 * @return void
	 * @param CharacteristicsSearchCodeType $value 
	 */
	function setSearchType($value)
	{
		$this->SearchType = $value;
	}
	/**
	 * @return CharacteristicType
	 * @param integer $index 
	 */
	function getSortCharacteristics($index = null)
	{
		if ($index !== null) {
			return $this->SortCharacteristics[$index];
		} else {
			return $this->SortCharacteristics;
		}
	}
	/**
	 * @return void
	 * @param CharacteristicType $value 
	 * @param  $index 
	 */
	function setSortCharacteristics($value, $index = null)
	{
		if ($index !== null) {
			$this->SortCharacteristics[$index] = $value;
		} else {
			$this->SortCharacteristics = $value;
		}
	}
	/**
	 * @return void
	 * @param CharacteristicType $value 
	 */
	function addSortCharacteristics($value)
	{
		$this->SortCharacteristics[] = $value;
	}
	/**
	 * @return DataElementSetType
	 * @param integer $index 
	 */
	function getDataElementSet($index = null)
	{
		if ($index !== null) {
			return $this->DataElementSet[$index];
		} else {
			return $this->DataElementSet;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 * @param  $index 
	 */
	function setDataElementSet($value, $index = null)
	{
		if ($index !== null) {
			$this->DataElementSet[$index] = $value;
		} else {
			$this->DataElementSet = $value;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 */
	function addDataElementSet($value)
	{
		$this->DataElementSet[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductSearchPageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SearchCharacteristicsSet' =>
					array(
						'required' => false,
						'type' => 'CharacteristicsSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchType' =>
					array(
						'required' => false,
						'type' => 'CharacteristicsSearchCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortCharacteristics' =>
					array(
						'required' => false,
						'type' => 'CharacteristicType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DataElementSet' =>
					array(
						'required' => false,
						'type' => 'DataElementSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
