<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ProductType.php';

/**
 * A set of results returned from a catalog product search. 
 * UseGetProductSearchResults or GetProductFamilyMembers to perform the search. See 
 * theguide for information about Pre-filled Item Information (Catalogs) 
 * functionality. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductFamilyType.html
 *
 */
class ProductFamilyType extends EbatNs_ComplexType
{
	/**
	 * @var ProductType
	 */
	protected $ParentProduct;
	/**
	 * @var ProductType
	 */
	protected $FamilyMembers;

	/**
	 * @return ProductType
	 */
	function getParentProduct()
	{
		return $this->ParentProduct;
	}
	/**
	 * @return void
	 * @param ProductType $value 
	 */
	function setParentProduct($value)
	{
		$this->ParentProduct = $value;
	}
	/**
	 * @return ProductType
	 * @param integer $index 
	 */
	function getFamilyMembers($index = null)
	{
		if ($index !== null) {
			return $this->FamilyMembers[$index];
		} else {
			return $this->FamilyMembers;
		}
	}
	/**
	 * @return void
	 * @param ProductType $value 
	 * @param  $index 
	 */
	function setFamilyMembers($value, $index = null)
	{
		if ($index !== null) {
			$this->FamilyMembers[$index] = $value;
		} else {
			$this->FamilyMembers = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductType $value 
	 */
	function addFamilyMembers($value)
	{
		$this->FamilyMembers[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductFamilyType', 'http://www.w3.org/2001/XMLSchema');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ParentProduct' =>
					array(
						'required' => false,
						'type' => 'ProductType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FamilyMembers' =>
					array(
						'required' => false,
						'type' => 'ProductType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));	$this->_attributes = array_merge($this->_attributes,
		array(
			'hasMoreChildren' =>
			array(
				'name' => 'hasMoreChildren',
				'type' => 'boolean',
				'use' => 'required'
			)
		));

	}
}
?>
