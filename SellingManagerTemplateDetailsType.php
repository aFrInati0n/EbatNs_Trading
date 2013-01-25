<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerProductDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ItemType.php';

/**
 * Describes a Selling Manager Template 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerTemplateDetailsType.html
 *
 */
class SellingManagerTemplateDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $SaleTemplateID;
	/**
	 * @var string
	 */
	protected $SaleTemplateName;
	/**
	 * @var float
	 */
	protected $SuccessPercent;
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;
	/**
	 * @var ItemType
	 */
	protected $Template;

	/**
	 * @return string
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
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
	 * @return float
	 */
	function getSuccessPercent()
	{
		return $this->SuccessPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setSuccessPercent($value)
	{
		$this->SuccessPercent = $value;
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
	 * @return ItemType
	 */
	function getTemplate()
	{
		return $this->Template;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setTemplate($value)
	{
		$this->Template = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerTemplateDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'string',
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
					'SuccessPercent' =>
					array(
						'required' => false,
						'type' => 'float',
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
					'Template' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
