<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'ProductSearchType.php';
require_once 'AbstractRequestType.php';

/**
 * GetProductFamilyMembers is intended to be used combination with 
 * GetProductSearchResults.If a search result returned from GetProductSearchResults 
 * does not return allproduct versions in a family, and if the user wants to see 
 * more versions (editions)of the product, you can use GetProductFamilyMembers to 
 * retrieve all versions of the product.That is, if GetProductSearchResultsonly 
 * returns the product family header (ParentProduct),use this call to zoom in on a 
 * particular family of product versions.(This situation usually occurs when you 
 * call GetProductSearchResults and more morematches are found than the 
 * MaxChildrenPerFamily value you specified.)<br><br>The structure of 
 * tGetProductFamilyMembers is similar to that of GetProductSearchResults.Instead 
 * of passing in a query, you pass in a product ID. This product ID is used tofind 
 * all the members of the product family that the specified product is a member 
 * of.The results are compatible with the results from GetProductSearchResults,so 
 * similar application logic can be used to handle both requests and responses.This 
 * call supports batch requests. This means you can retrieve products inmultiple 
 * families by using a single request. To perform a batch request,pass an array of 
 * ProductSearch objects in the call.<br><br>For each ProductSearch object, 
 * GetProductFamilyMembers returns a list of all theproducts in the specified 
 * product family. Each product is represented as a list ofattributes (Item 
 * Specifics) plus other identifying information, such as a product IDand a stock 
 * photo.<br><br>Once the user selects a product from the results, pass its ID in a 
 * GetProductSellingPagesrequest to retrieve more detailed information about the 
 * product, including a set ofoptional Item Specifics that the seller can use in 
 * addition to thepre-filled Item Specifics (see GetProductSellingPages). 
 * <br><br>To use this data in a listing, pass the product ID and the optional Item 
 * Specificsin the seller's listing request (AddItem). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFamilyMembersRequestType.html
 *
 */
class GetProductFamilyMembersRequestType extends AbstractRequestType
{
	/**
	 * @var ProductSearchType
	 */
	protected $ProductSearch;

	/**
	 * @return ProductSearchType
	 * @param integer $index 
	 */
	function getProductSearch($index = null)
	{
		if ($index !== null) {
			return $this->ProductSearch[$index];
		} else {
			return $this->ProductSearch;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchType $value 
	 * @param  $index 
	 */
	function setProductSearch($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSearch[$index] = $value;
		} else {
			$this->ProductSearch = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchType $value 
	 */
	function addProductSearch($value)
	{
		$this->ProductSearch[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFamilyMembersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductSearch' =>
					array(
						'required' => false,
						'type' => 'ProductSearchType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
