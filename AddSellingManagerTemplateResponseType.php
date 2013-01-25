<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerProductDetailsType.php';
require_once 'FeesType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains values indicating template information for a newly-exported item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddSellingManagerTemplateResponseType.html
 *
 */
class AddSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	 * @var long
	 */
	protected $CategoryID;
	/**
	 * @var long
	 */
	protected $Category2ID;
	/**
	 * @var long
	 */
	protected $SaleTemplateID;
	/**
	 * @var long
	 */
	protected $SaleTemplateGroupID;
	/**
	 * @var string
	 */
	protected $SaleTemplateName;
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;
	/**
	 * @var FeesType
	 */
	protected $Fees;

	/**
	 * @return long
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return long
	 */
	function getCategory2ID()
	{
		return $this->Category2ID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}
	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return long
	 */
	function getSaleTemplateGroupID()
	{
		return $this->SaleTemplateGroupID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateGroupID($value)
	{
		$this->SaleTemplateGroupID = $value;
	}
	/**
	 * @return string
	 */
	function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSaleTemplateName($value)
	{
		$this->SaleTemplateName = $value;
	}
	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
	/**
	 * @return FeesType
	 */
	function getFees()
	{
		return $this->Fees;
	}
	/**
	 * @return void
	 * @param FeesType $value 
	 */
	function setFees($value)
	{
		$this->Fees = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Category2ID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleTemplateGroupID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SaleTemplateName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerProductDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Fees' =>
					array(
						'required' => false,
						'type' => 'FeesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
