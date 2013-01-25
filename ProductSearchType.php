<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'CharacteristicSetIDsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SearchAttributesType.php';
require_once 'ExternalProductIDType.php';

/**
 * Container for a product query and pagination instructions.This data is 
 * applicable when searching eBay catalogs for stock productinformation (to use in 
 * listings with Pre-filled Item Information.)Input only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductSearchType.html
 *
 */
class ProductSearchType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ProductSearchID;
	/**
	 * @var int
	 */
	protected $AttributeSetID;
	/**
	 * @var int
	 */
	protected $ProductFinderID;
	/**
	 * @var string
	 */
	protected $ProductID;
	/**
	 * @var int
	 */
	protected $SortAttributeID;
	/**
	 * @var int
	 */
	protected $MaxChildrenPerFamily;
	/**
	 * @var SearchAttributesType
	 */
	protected $SearchAttributes;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var boolean
	 */
	protected $AvailableItemsOnly;
	/**
	 * @var string
	 */
	protected $QueryKeywords;
	/**
	 * @var CharacteristicSetIDsType
	 */
	protected $CharacteristicSetIDs;
	/**
	 * @var string
	 */
	protected $ProductReferenceID;
	/**
	 * @var ExternalProductIDType
	 */
	protected $ExternalProductID;

	/**
	 * @return string
	 */
	function getProductSearchID()
	{
		return $this->ProductSearchID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductSearchID($value)
	{
		$this->ProductSearchID = $value;
	}
	/**
	 * @return int
	 */
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}
	/**
	 * @return int
	 */
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}
	/**
	 * @return string
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return int
	 */
	function getSortAttributeID()
	{
		return $this->SortAttributeID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSortAttributeID($value)
	{
		$this->SortAttributeID = $value;
	}
	/**
	 * @return int
	 */
	function getMaxChildrenPerFamily()
	{
		return $this->MaxChildrenPerFamily;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxChildrenPerFamily($value)
	{
		$this->MaxChildrenPerFamily = $value;
	}
	/**
	 * @return SearchAttributesType
	 * @param integer $index 
	 */
	function getSearchAttributes($index = null)
	{
		if ($index !== null) {
			return $this->SearchAttributes[$index];
		} else {
			return $this->SearchAttributes;
		}
	}
	/**
	 * @return void
	 * @param SearchAttributesType $value 
	 * @param  $index 
	 */
	function setSearchAttributes($value, $index = null)
	{
		if ($index !== null) {
			$this->SearchAttributes[$index] = $value;
		} else {
			$this->SearchAttributes = $value;
		}
	}
	/**
	 * @return void
	 * @param SearchAttributesType $value 
	 */
	function addSearchAttributes($value)
	{
		$this->SearchAttributes[] = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return boolean
	 */
	function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAvailableItemsOnly($value)
	{
		$this->AvailableItemsOnly = $value;
	}
	/**
	 * @return string
	 */
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}
	/**
	 * @return CharacteristicSetIDsType
	 */
	function getCharacteristicSetIDs()
	{
		return $this->CharacteristicSetIDs;
	}
	/**
	 * @return void
	 * @param CharacteristicSetIDsType $value 
	 */
	function setCharacteristicSetIDs($value)
	{
		$this->CharacteristicSetIDs = $value;
	}
	/**
	 * @return string
	 */
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}
	/**
	 * @return ExternalProductIDType
	 */
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}
	/**
	 * @return void
	 * @param ExternalProductIDType $value 
	 */
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductSearchType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSearchID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSetID' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ProductFinderID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortAttributeID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxChildrenPerFamily' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchAttributes' =>
					array(
						'required' => false,
						'type' => 'SearchAttributesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AvailableItemsOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QueryKeywords' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharacteristicSetIDs' =>
					array(
						'required' => false,
						'type' => 'CharacteristicSetIDsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalProductID' =>
					array(
						'required' => false,
						'type' => 'ExternalProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
