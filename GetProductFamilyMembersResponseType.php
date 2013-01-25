<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'DataElementSetType.php';
require_once 'ProductSearchResultType.php';
require_once 'AbstractResponseType.php';

/**
 * GetProductFamilyMembers performs a product search and returns results 
 * comprisingall the children in the product family identified by a product ID that 
 * wasspecified in the request. Use this call when more matches are found than 
 * themax amount specified per family in a call to GetProductSearchResults.This 
 * call supports batch requests. This means you can retrieve products inmultiple 
 * families by using a single request.The results are compatible with the results 
 * from GetProductSearchResults,so similar application logic can be used to handle 
 * both requests and responses. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetProductFamilyMembersResponseType.html
 *
 */
class GetProductFamilyMembersResponseType extends AbstractResponseType
{
	/**
	 * @var DataElementSetType
	 */
	protected $DataElementSets;
	/**
	 * @var ProductSearchResultType
	 */
	protected $ProductSearchResult;

	/**
	 * @return DataElementSetType
	 * @param integer $index 
	 */
	function getDataElementSets($index = null)
	{
		if ($index !== null) {
			return $this->DataElementSets[$index];
		} else {
			return $this->DataElementSets;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 * @param  $index 
	 */
	function setDataElementSets($value, $index = null)
	{
		if ($index !== null) {
			$this->DataElementSets[$index] = $value;
		} else {
			$this->DataElementSets = $value;
		}
	}
	/**
	 * @return void
	 * @param DataElementSetType $value 
	 */
	function addDataElementSets($value)
	{
		$this->DataElementSets[] = $value;
	}
	/**
	 * @return ProductSearchResultType
	 * @param integer $index 
	 */
	function getProductSearchResult($index = null)
	{
		if ($index !== null) {
			return $this->ProductSearchResult[$index];
		} else {
			return $this->ProductSearchResult;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchResultType $value 
	 * @param  $index 
	 */
	function setProductSearchResult($value, $index = null)
	{
		if ($index !== null) {
			$this->ProductSearchResult[$index] = $value;
		} else {
			$this->ProductSearchResult = $value;
		}
	}
	/**
	 * @return void
	 * @param ProductSearchResultType $value 
	 */
	function addProductSearchResult($value)
	{
		$this->ProductSearchResult[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetProductFamilyMembersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DataElementSets' =>
					array(
						'required' => false,
						'type' => 'DataElementSetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ProductSearchResult' =>
					array(
						'required' => false,
						'type' => 'ProductSearchResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
