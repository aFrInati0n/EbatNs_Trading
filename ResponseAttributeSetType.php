<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductFinderConstraintType.php';
require_once 'ProductFamilyType.php';

/**
 * A single set of one or more product families and related informationreturned in 
 * the results of a product search. Supports Pre-filled Item 
 * Informationfunctionality. See the Developer's Guide for more information 
 * aboutworking with this data. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ResponseAttributeSetType.html
 *
 */
class ResponseAttributeSetType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ApproximatePages;
	/**
	 * @var int
	 */
	protected $AttributeSetID;
	/**
	 * @var boolean
	 */
	protected $HasMore;
	/**
	 * @var ProductFamilyType
	 */
	protected $ProductFamilies;
	/**
	 * @var ProductFinderConstraintType
	 */
	protected $ProductFinderConstraints;
	/**
	 * @var boolean
	 */
	protected $TooManyMatchesFound;
	/**
	 * @var int
	 */
	protected $TotalProducts;

	/**
	 * @return int
	 */
	function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setApproximatePages($value)
	{
		$this->ApproximatePages = $value;
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
	 * @return boolean
	 */
	function getHasMore()
	{
		return $this->HasMore;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMore($value)
	{
		$this->HasMore = $value;
	}
	/**
	 * @return ProductFamilyType
	 * @param integer $index 
	 */
	function getProductFamilies($index = null)
	{
		if ($index !== null) {
			return $this->ProductFamilies[$index];
		} else {
			return $this->ProductFamilies;
		}
	}
	/**
	 * @return void
	 * @param ProductFamilyType $value 
	 * @param  $index 
	 */
	function setProductFamilies($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductFamilies[$index] = $value;
		} else {
			$this->ProductFamilies = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductFamilyType $value 
	 */
	function addProductFamilies($value)
	{
		$this->ProductFamilies[] = $value;
	}
	/**
	 * @return ProductFinderConstraintType
	 * @param integer $index 
	 */
	function getProductFinderConstraints($index = null)
	{
		if ($index !== null) {
			return $this->ProductFinderConstraints[$index];
		} else {
			return $this->ProductFinderConstraints;
		}
	}
	/**
	 * @return void
	 * @param ProductFinderConstraintType $value 
	 * @param  $index 
	 */
	function setProductFinderConstraints($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductFinderConstraints[$index] = $value;
		} else {
			$this->ProductFinderConstraints = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductFinderConstraintType $value 
	 */
	function addProductFinderConstraints($value)
	{
		$this->ProductFinderConstraints[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getTooManyMatchesFound()
	{
		return $this->TooManyMatchesFound;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setTooManyMatchesFound($value)
	{
		$this->TooManyMatchesFound = $value;
	}
	/**
	 * @return int
	 */
	function getTotalProducts()
	{
		return $this->TotalProducts;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalProducts($value)
	{
		$this->TotalProducts = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ResponseAttributeSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ApproximatePages' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'AttributeSetID' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'HasMore' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ProductFamilies' =>
					array(
						'required' => false,
						'type' => 'ProductFamilyType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ProductFinderConstraints' =>
					array(
						'required' => false,
						'type' => 'ProductFinderConstraintType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'TooManyMatchesFound' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'TotalProducts' =>
					array(
						'required' => true,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					)
				));
	}
}
?>
