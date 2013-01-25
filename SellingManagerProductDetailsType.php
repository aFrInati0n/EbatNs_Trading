<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'SellingManagerVendorDetailsType.php';

/**
 * Returned if the user is a Selling Manager user. Defines product information for 
 * Selling Managerusers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerProductDetailsType.html
 *
 */
class SellingManagerProductDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ProductName;
	/**
	 * @var long
	 */
	protected $ProductID;
	/**
	 * @var string
	 */
	protected $CustomLabel;
	/**
	 * @var int
	 */
	protected $QuantityAvailable;
	/**
	 * @var AmountType
	 */
	protected $UnitCost;
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var boolean
	 */
	protected $RestockAlert;
	/**
	 * @var int
	 */
	protected $RestockThreshold;
	/**
	 * @var SellingManagerVendorDetailsType
	 */
	protected $VendorInfo;
	/**
	 * @var string
	 */
	protected $Note;

	/**
	 * @return string
	 */
	function getProductName()
	{
		return $this->ProductName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductName($value)
	{
		$this->ProductName = $value;
	}
	/**
	 * @return long
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return string
	 */
	function getCustomLabel()
	{
		return $this->CustomLabel;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCustomLabel($value)
	{
		$this->CustomLabel = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityAvailable()
	{
		return $this->QuantityAvailable;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityAvailable($value)
	{
		$this->QuantityAvailable = $value;
	}
	/**
	 * @return AmountType
	 */
	function getUnitCost()
	{
		return $this->UnitCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setUnitCost($value)
	{
		$this->UnitCost = $value;
	}
	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return boolean
	 */
	function getRestockAlert()
	{
		return $this->RestockAlert;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRestockAlert($value)
	{
		$this->RestockAlert = $value;
	}
	/**
	 * @return int
	 */
	function getRestockThreshold()
	{
		return $this->RestockThreshold;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRestockThreshold($value)
	{
		$this->RestockThreshold = $value;
	}
	/**
	 * @return SellingManagerVendorDetailsType
	 */
	function getVendorInfo()
	{
		return $this->VendorInfo;
	}
	/**
	 * @return void
	 * @param SellingManagerVendorDetailsType $value 
	 */
	function setVendorInfo($value)
	{
		$this->VendorInfo = $value;
	}
	/**
	 * @return string
	 */
	function getNote()
	{
		return $this->Note;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNote($value)
	{
		$this->Note = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerProductDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CustomLabel' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityAvailable' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UnitCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RestockAlert' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RestockThreshold' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VendorInfo' =>
					array(
						'required' => false,
						'type' => 'SellingManagerVendorDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Note' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
