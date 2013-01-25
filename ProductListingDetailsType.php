<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'TicketListingDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'BrandMPNType.php';

/**
 * Contains product information that can be included in a listing.Applicable for 
 * listings that use eBay's Pre-filled Item Information feature.See the Developer's 
 * Guide for details on working with Pre-filled Item Information. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ProductListingDetailsType.html
 *
 */
class ProductListingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ProductID;
	/**
	 * @var boolean
	 */
	protected $IncludeStockPhotoURL;
	/**
	 * @var boolean
	 */
	protected $IncludePrefilledItemInformation;
	/**
	 * @var boolean
	 */
	protected $UseStockPhotoURLAsGallery;
	/**
	 * @var anyURI
	 */
	protected $StockPhotoURL;
	/**
	 * @var string
	 */
	protected $Copyright;
	/**
	 * @var string
	 */
	protected $ProductReferenceID;
	/**
	 * @var anyURI
	 */
	protected $DetailsURL;
	/**
	 * @var anyURI
	 */
	protected $ProductDetailsURL;
	/**
	 * @var boolean
	 */
	protected $ReturnSearchResultOnDuplicates;
	/**
	 * @var boolean
	 */
	protected $ListIfNoProduct;
	/**
	 * @var string
	 */
	protected $ISBN;
	/**
	 * @var string
	 */
	protected $UPC;
	/**
	 * @var string
	 */
	protected $EAN;
	/**
	 * @var BrandMPNType
	 */
	protected $BrandMPN;
	/**
	 * @var TicketListingDetailsType
	 */
	protected $TicketListingDetails;
	/**
	 * @var boolean
	 */
	protected $UseFirstProduct;

	/**
	 * @return string
	 */
	function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeStockPhotoURL()
	{
		return $this->IncludeStockPhotoURL;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeStockPhotoURL($value)
	{
		$this->IncludeStockPhotoURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludePrefilledItemInformation()
	{
		return $this->IncludePrefilledItemInformation;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludePrefilledItemInformation($value)
	{
		$this->IncludePrefilledItemInformation = $value;
	}
	/**
	 * @return boolean
	 */
	function getUseStockPhotoURLAsGallery()
	{
		return $this->UseStockPhotoURLAsGallery;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setUseStockPhotoURLAsGallery($value)
	{
		$this->UseStockPhotoURLAsGallery = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCopyright($index = null)
	{
		if ($index !== null) {
			return $this->Copyright[$index];
		} else {
			return $this->Copyright;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCopyright($value, $index = null)
	{
		if ($index !== null) {
			$this->Copyright[$index] = $value;
		} else {
			$this->Copyright = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCopyright($value)
	{
		$this->Copyright[] = $value;
	}
	/**
	 * @return string
	 */
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getProductDetailsURL()
	{
		return $this->ProductDetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setProductDetailsURL($value)
	{
		$this->ProductDetailsURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setReturnSearchResultOnDuplicates($value)
	{
		$this->ReturnSearchResultOnDuplicates = $value;
	}
	/**
	 * @return boolean
	 */
	function getListIfNoProduct()
	{
		return $this->ListIfNoProduct;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setListIfNoProduct($value)
	{
		$this->ListIfNoProduct = $value;
	}
	/**
	 * @return string
	 */
	function getISBN()
	{
		return $this->ISBN;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setISBN($value)
	{
		$this->ISBN = $value;
	}
	/**
	 * @return string
	 */
	function getUPC()
	{
		return $this->UPC;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUPC($value)
	{
		$this->UPC = $value;
	}
	/**
	 * @return string
	 */
	function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEAN($value)
	{
		$this->EAN = $value;
	}
	/**
	 * @return BrandMPNType
	 */
	function getBrandMPN()
	{
		return $this->BrandMPN;
	}
	/**
	 * @return void
	 * @param BrandMPNType $value 
	 */
	function setBrandMPN($value)
	{
		$this->BrandMPN = $value;
	}
	/**
	 * @return TicketListingDetailsType
	 */
	function getTicketListingDetails()
	{
		return $this->TicketListingDetails;
	}
	/**
	 * @return void
	 * @param TicketListingDetailsType $value 
	 */
	function setTicketListingDetails($value)
	{
		$this->TicketListingDetails = $value;
	}
	/**
	 * @return boolean
	 */
	function getUseFirstProduct()
	{
		return $this->UseFirstProduct;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setUseFirstProduct($value)
	{
		$this->UseFirstProduct = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ProductListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ProductID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeStockPhotoURL' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludePrefilledItemInformation' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UseStockPhotoURLAsGallery' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StockPhotoURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Copyright' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ProductReferenceID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductDetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnSearchResultOnDuplicates' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListIfNoProduct' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ISBN' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UPC' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EAN' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BrandMPN' =>
					array(
						'required' => false,
						'type' => 'BrandMPNType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TicketListingDetails' =>
					array(
						'required' => false,
						'type' => 'TicketListingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UseFirstProduct' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
