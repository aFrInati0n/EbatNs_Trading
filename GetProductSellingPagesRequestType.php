<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'ProductUseCaseCodeType.php';
require_once 'ProductType.php';
require_once 'AbstractRequestType.php';

/**
 * No longer recommended. This supports an older ID-based format for describing 
 * item specifics and product details.Most eBay categories no longer support 
 * ID-based attributes.The remaining categories (e.g., US eBay Motors) will drop 
 * support for ID-based attributes by May 2012. New applications should not use 
 * ID-based attributes. Existing applications should be updated to remove all 
 * dependencieson ID-based attributes now. Instead, use FindProducts in eBay's 
 * Shopping API to search for product details.<br><br> Retrieves information that 
 * describes how to present catalogproduct information to a seller. Use this 
 * information to presentusers with the equivalent of the Item Specifics portion of 
 * theeBay Title and Description pages and to validate user-specifiedvalues for 
 * eBay attributes on the client before including them inan AddItem call or related 
 * calls. The data contains a list of allthe attributes that are applicable for one 
 * or more requestedproducts, along with related meta-data. The meta-data 
 * specifiesthe pre-filled values of each attribute, the possible values 
 * ofattributes that are not pre-filled, the logic for presenting theattributes to 
 * a user, and rules for validating the user'sselections. Use the results in 
 * combination with GetAttributesXSLto render the Item Specifics in a graphical 
 * user interface. Seethe eBay Web Services Guide for an overview of Pre-filled 
 * ItemInformation, details about searching for catalog products, andinformation 
 * about the ProductSellingPages content model. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductSellingPagesRequestType.html
 *
 */
class GetProductSellingPagesRequestType extends AbstractRequestType
{
	/**
	 * @var ProductUseCaseCodeType
	 */
	protected $UseCase;
	/**
	 * @var ProductType
	 */
	protected $Product;

	/**
	 * @return ProductUseCaseCodeType
	 */
	function getUseCase()
	{
		return $this->UseCase;
	}
	/**
	 * @return void
	 * @param ProductUseCaseCodeType $value 
	 */
	function setUseCase($value)
	{
		$this->UseCase = $value;
	}
	/**
	 * @return ProductType
	 * @param integer $index 
	 */
	function getProduct($index = null)
	{
		if ($index !== null) {
			return $this->Product[$index];
		} else {
			return $this->Product;
		}
	}
	/**
	 * @return void
	 * @param ProductType $value 
	 * @param  $index 
	 */
	function setProduct($value, $index = null)
	{
		if ($index !== null) {
			$this->Product[$index] = $value;
		} else {
			$this->Product = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductType $value 
	 */
	function addProduct($value)
	{
		$this->Product[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductSellingPagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'UseCase' =>
					array(
						'required' => false,
						'type' => 'ProductUseCaseCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Product' =>
					array(
						'required' => false,
						'type' => 'ProductType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
