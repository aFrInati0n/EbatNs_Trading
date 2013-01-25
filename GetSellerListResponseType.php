<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'ItemArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'UserType.php';
require_once 'PaginationResultType.php';

/**
 * Contains a list of the items listed by the seller specified as input. The list 
 * ofitems is returned in an ItemArrayType object, in which are returned zero, one, 
 * ormultiple ItemType objects. Each ItemType object contains the detail data for 
 * oneitem listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerListResponseType.html
 *
 */
class GetSellerListResponseType extends AbstractResponseType
{
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var boolean
	 */
	protected $HasMoreItems;
	/**
	 * @var ItemArrayType
	 */
	protected $ItemArray;
	/**
	 * @var int
	 */
	protected $ItemsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $ReturnedItemCountActual;
	/**
	 * @var UserType
	 */
	protected $Seller;

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
	 * @return boolean
	 */
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}
	/**
	 * @return ItemArrayType
	 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * @return void
	 * @param ItemArrayType $value 
	 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
	/**
	 * @return int
	 */
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return int
	 */
	function getReturnedItemCountActual()
	{
		return $this->ReturnedItemCountActual;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReturnedItemCountActual($value)
	{
		$this->ReturnedItemCountActual = $value;
	}
	/**
	 * @return UserType
	 */
	function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setSeller($value)
	{
		$this->Seller = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMoreItems' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemArray' =>
					array(
						'required' => false,
						'type' => 'ItemArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnedItemCountActual' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Seller' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
