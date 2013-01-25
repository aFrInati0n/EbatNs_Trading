<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerSoldOrderType.php';
require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';

/**
 * Returns a Selling Manager user's sold listings. Response can be filtered by 
 * date, searchvalues, and stores. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerSoldListingsResponseType.html
 *
 */
class GetSellingManagerSoldListingsResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerSoldOrderType
	 */
	protected $SaleRecord;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;

	/**
	 * @return SellingManagerSoldOrderType
	 * @param integer $index 
	 */
	function getSaleRecord($index = null)
	{
		if ($index !== null) {
			return $this->SaleRecord[$index];
		} else {
			return $this->SaleRecord;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerSoldOrderType $value 
	 * @param  $index 
	 */
	function setSaleRecord($value, $index = null)
	{
		if ($index !== null) {
			$this->SaleRecord[$index] = $value;
		} else {
			$this->SaleRecord = $value;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerSoldOrderType $value 
	 */
	function addSaleRecord($value)
	{
		$this->SaleRecord[] = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerSoldListingsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleRecord' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSoldOrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
